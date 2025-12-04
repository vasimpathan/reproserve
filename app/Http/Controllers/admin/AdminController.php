<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    
    public function profile()
    {
        $admin = auth()->guard('admin')->user();
        return view('admin.profile', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        $admin = auth()->guard('admin')->user();

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'mobileno'  => 'required|string|max:15',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->mobileno = $request->mobileno;
       // echo $request->hasFile('photo');die;

        if ($request->hasFile('photo')) {

            if ($admin->photo && file_exists(public_path('uploads/admins/'.$admin->photo))) 
            {
                unlink(public_path('uploads/admins/'.$admin->photo));
            }

            $filename = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('uploads/admins'), $filename);

            $admin->photo = $filename;
        }

        $admin->save();

        return back()->with('success', 'Profile updated successfully.');
    }

    //Change Password
    public function changePassword()
    {
        return view('admin.change_password');
    }

    public function updatePassword(Request $request)
    {
        $admin = auth()->guard('admin')->user();

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ]);

        if (!Hash::check($request->old_password, $admin->password)) {
            return back()->withErrors(['old_password' => 'Old password is incorrect']);
        }

        $admin->password = Hash::make($request->new_password);
        $admin->save();

        return back()->with('success', 'Password updated successfully.');
    }


}
