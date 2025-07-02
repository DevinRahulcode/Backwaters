<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use App\Models\Office;
use App\Models\DynamicMenu;
use App\Models\Designations;
use App\Models\Policebranch;
use Illuminate\Http\Request;
use App\Events\LoggableEvent;
use App\Helpers\StorageHelper;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Helpers\APIResponseMessage;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class RoleController extends Controller 
{

    public static function middleware(): array {
        return [
            new Middleware('permission:role-list', only: ['index']),
            new Middleware('permission:role-create', only: ['create', 'store']),
            new Middleware('permission:role-edit', only: ['edit', 'update']),
            new Middleware('permission:role-delete', only: ['destroy']),
        ];
    }

    // Method to list roles with AJAX support for DataTables
    public function index(Request $request)
    {
        /*
       $roles = Role::ord
        ,'DESC')->paginate(5);
        return view('roles.index',compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
        */


        if ($request->ajax()) {
            $data = Role::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', 'admin.roles.actionsBlock')
                ->rawColumns(['edit'])
                ->make(true);
        }

        return view('admin.roles.list');
    }

    // Method to show the form for creating a new role
    public function create() {
        $permission = Permission::get();
        $dynamicMenu = DynamicMenu::where('show_menu', 1)->orderBy('fOrder', 'ASC')->get();

        return view('admin.roles.index', compact('permission', 'dynamicMenu'));
    }


    // Method to store a newly created role in the database
    public function store(Request $request) {
        try {
            $request->validate([
                'name' => 'required|unique:roles,name',
                'user_manual' => 'nullable|mimes:pdf|max:2048'
            ]);

            $path = null;
            if ($request->hasFile('user_manual')) {
                $file = $request->file('user_manual');
                $fileName = time() . '-' . $file->getClientOriginalName();
                $path = $file->storeAs('usermanual', $fileName, 'public');
            }

            $role = new Role();
            $role->name = $request->name;
            $role->guard_name = 'web';
            $role->user_manual = $path; // Save relative storage path
            $role->save();

            $role->syncPermissions($request->input('permission'));


            return redirect()->route('roles-list')->with('success', 'Role created successfully');
        } catch (\Exception $e) {
            dd($e);
        }
    }

    /**
     * Display the specified role and its permissions.
     *
     * @param  string  $id  The encrypted ID of the role.
     * @return \Illuminate\View\View  The view displaying the role and its permissions.
     */
    public function show($id) {

        $roleId = decrypt($id);
        $role = Role::with([])->find($roleId);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
                ->where("role_has_permissions.role_id", $id)
                ->get();

        return view('roles.show', compact('role', 'rolePermissions'));
    }

    /**
     * Show the form for editing the specified role.
     *
     * @param  string  $id  The encrypted ID of the role.
     * @return \Illuminate\View\View  The view displaying the edit form for the role.
     */
    public function edit($id) {
        $role_id = decrypt($id);
        $role = Role::find($role_id);
        $permission = Permission::get();
        $dynamicMenu = DynamicMenu::where('show_menu', 1)->orderBy('fOrder', 'ASC')->get();

        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $role_id)
                ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
                ->all();

        return view('admin.roles.edit', compact('role', 'permission', 'rolePermissions', 'dynamicMenu'));
    }



    /**
     * Update the specified role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
        public function update(Request $request)
        {
       
            $id = $request->id;
            $request->validate([
                'name' => 'required',
                'user_manual' => 'nullable|mimes:pdf|max:2048'
            ]);

            $role = Role::find($id);
            if (!$role) {
                return redirect()->route('roles.index')->with('error', 'Role not found');
            }

            $role->name = $request->input('name');
            $role->guard_name = 'web';


            if ($request->hasFile('user_manual')) {

                if ($role->user_manual) {
                    (new StorageHelper('usermanual', $role->user_manual))->deleteImage();
                }

                $file = $request->file('user_manual');
                $fileName = time() . '-' . $file->getClientOriginalName();
                $path = $file->storeAs('public/usermanual', $fileName);
                $role->user_manual = str_replace('public/', '', $path);
            }

            $role->save();

            // Sync permissions safely
            $permissions = $request->input('permission', []);
            $role->syncPermissions($permissions);

            return redirect()->route('roles.index')->with('success', 'Role updated successfully');
        }



    /**
     * Remove the specified role from storage.
     *
     * @param  int  $id  The ID of the role to delete.
     * @return \Illuminate\Http\RedirectResponse  Redirects to the roles index page with a success message.
     */
    public function destroy($id) {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
    }

    public function removeUserManual(Role $role)
    {
        try {
            // Check if a user manual path exists for this role
            if ($role->user_manual) {
                // Check if the file actually exists on the public disk before attempting to delete
                // The path stored in $role->user_manual should be relative to the 'public' disk root,
                // e.g., 'usermanual/filename.pdf'
                if (Storage::disk('public')->exists($role->user_manual)) {
                    Storage::disk('public')->delete($role->user_manual);
                }

                // Clear the manual path in the database for the role
                $role->user_manual = null;
                $role->save(); // Persist the change to the database

                // Return a success JSON response
                return response()->json([
                    'success' => true,
                    'message' => 'User manual removed successfully!',
                ]);
            } else {
                // Return an error if no user manual path is found in the database for the role
                return response()->json([
                    'success' => false,
                    'message' => 'No user manual found to remove for this role.',
                ], 404); // HTTP 404 Not Found
            }
        } catch (\Exception $e) {
            // Log any exceptions that occur during the process
            Log::error('Error removing user manual for role ' . $role->id . ': ' . $e->getMessage());

            // Return a generic error JSON response
            return response()->json([
                'success' => false,
                'message' => 'Failed to remove user manual due to an internal error.',
            ], 500); // HTTP 500 Internal Server Error
        }
    }


    /**
     * Toggle the activation status of a role.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function activation(Request $request) {
        $data = Role::find($request->id);

        if ($data->status == "Y") {
            $data->status = 'N';
            $data->save();



            return redirect()->route('roles-list')->with('success', APIResponseMessage::DEACTIVALE_RECORD);
        } else {
            $data->status = "Y";
            $data->save();


            return redirect()->route('roles-list')->with('success', APIResponseMessage::ACTIVATE_RECORD);
        }
    }
}
