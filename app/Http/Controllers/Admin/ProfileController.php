<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Events\LoggableEvent;
use App\Helpers\StorageHelper;
use Illuminate\Support\Facades\DB;
use App\Helpers\APIResponseMessage;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Event;
use App\Http\Requests\ProfilePostRequest;

class ProfileController extends Controller
{
        /**
     * Update the user's profile.
     *
     * @param  \App\Http\Requests\ProfilePostRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(ProfilePostRequest $request)
    {

        try {
            DB::beginTransaction();

            $user = User::find(Auth::id());
            if (!$user) {
                return redirect()->back()->with('failed', 'User not found');
            }

            $user->name = $request->input('name');

            if ($request->filled('new_password')) {
                $currentPassword = $request->input('current_password');

                if (!Hash::check($currentPassword, $user->password)) {
                    DB::rollBack(); 
                    return redirect()->back()->with('failed', 'Current password does not match.');
                }

                $user->password = Hash::make($request->new_password);
            }

            if ($request->hasFile('profile_image')) {

                $imageExtension = $request->profile_image->extension();
                $imgName = date('m-d-Y_H-i-s') . '-' . uniqid() . '.' . $imageExtension;
                $uploadUrl = (new StorageHelper('userprofile', $imgName, $request->profile_image))->uploadImage();

                $user->profile_image = $imgName;
            }

            $user->save();

            DB::commit(); 

            return redirect()->back()->with('success', 'Profile updated successfully!'); 

        } catch (\Exception $e) {
            DB::rollBack(); 
            Log::error('Profile update failed: ' . $e->getMessage()); 
            return redirect()->back()->with('failed', 'Failed to update profile.'); 
        }
    }
}
