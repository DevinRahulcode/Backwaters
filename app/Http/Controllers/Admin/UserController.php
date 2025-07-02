<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Library\MobitelSms;
use App\Models\SmsTemplate;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Events\LoggableEvent;
// use Datatables;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Helpers\APIResponseMessage;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\LabourOfficeDivision;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Event;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Routing\Controllers\Middleware;

class UserController extends Controller
{
    public static function middleware(): array
    {
        return [
            new Middleware('user-list|user-create|user-edit|user-delete', only: ['list']),
            new Middleware('user-create', only: ['index', 'store']),
            new Middleware('user-edit', only: ['edit', 'update']),
            new Middleware('user-delete', only: ['destroy']),
        ];
    }

    public function index()
    {
        return view('admin.users.list');
    }

    public function create(Request $request)
    {

        $roles = Role::pluck('name', 'name')->all();

        return view('admin.users.index', compact('roles'));
    }


    public function getUserList(Request $request)
    {
        $data = User::orderBy('id', 'DESC');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('edit', function ($row) {

                $edit_url = route('users-edit',encrypt($row->id));
                $btn = '<a href="' . $edit_url . '"><i class="fal fa-edit"></i></a>';
                return $btn;
            })
            ->addColumn('role', function ($row) {
                $v = "";
                if(!empty($row->getRoleNames())){
                    foreach($row->getRoleNames() as $v){
                        $v;
                    }
                }
                    return $v;
                })
            ->addColumn('activation', function($row){
                if ( $row->status == "Y" )
                    $status ='fal fa-check';
                else
                    $status ='fal fa-backspace';

                $btn = '<a href="changestatus-user/'.$row->id.'"><i class="'.$status.'"></i></a>';

                return $btn;
            })
            ->addColumn('blockuser', function ($row) {
                return view('admin.users.partials.actionsBlock', compact('row'));
            })
            ->rawColumns(['edit','role','activation','blockuser'])
            ->make(true);

    }

     public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|max:190',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm_password',
            'roles' => 'required|exists:roles,name',  // Validate roleId is required and exists in the roles table

        ]);

        try {
            DB::beginTransaction();

            $input = $request->all();
            $input['password'] = Hash::make($input['password']);

            $user = User::create($input);
            $user->assignRole($request->input('roles'));

            DB::commit();


            return redirect()->route('users-list')->with('success', APIResponseMessage::CREATED);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::critical('Exception in createBay : ', [$e->getMessage()]);
            return redirect()->back()->withInput()->with('error', APIResponseMessage::ERROR_EXCEPTION);
        }
    }

    public function edit($id)
    {
        $userId = decrypt($id);
        $user = User::find($userId);
        $roles = Role::pluck('name', 'name')->all();

        return view('admin.users.edit', compact('user','roles'));
    }


    public function update(Request $request,$id)
    {
        $id = $request->id;
        $request->validate([
            'name' => 'required',
            'password' => 'same:confirm-password',
            'roleId' => 'required|exists:roles,name',  // Validate roleId is required and exists in the roles table
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);

        // Remove previous roles assigned to the user
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        // Assign the selected role to the user
        $user->assignRole($request->input('roleId'));  // Single role assignment


        return redirect()->route('users-list')->with('success', 'User updated successfully');
    }


    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $user = User::find($id);
            $user->is_delete = 1;
            $user->update();

            DB::commit();


            return redirect()->route('users.index')->with('success', APIResponseMessage::DELETED);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::critical('Exception in deleteBay : ', [$e->getMessage()]);
            return redirect()->route('users.index')->with('error', APIResponseMessage::ERROR_EXCEPTION);

        }
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  User::find($request->id);


        if ( $data->status == "Y" ) {

            $data->status = 'N';
            $data->save();
            $id = $data->id;


            return redirect()->route('users-list')
            ->with('success', 'Record deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            return redirect()->route('users-list')
            ->with('success', 'Record activate successfully.');
        }

    }

}
