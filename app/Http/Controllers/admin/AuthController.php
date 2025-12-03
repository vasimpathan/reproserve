<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\Admin;   // ✔ Correct
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function loginPage()
    {
        if (auth()->guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->guard('admin')->attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid email or password'])->withInput();
    }


    public function forgotPasswordPage()
    {
        return view('admin.auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        //dd($request->all());

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            return back()->with('error', 'This email is not registered.');
        }

        // Generate random password
        $newPassword = Str::random(10);

        // Update password in DB
        $admin->password = Hash::make($newPassword);
        $admin->save();

        // Send email
        Mail::to($admin->email)->send(new \App\Mail\AdminResetPasswordMail($newPassword));

        return back()->with('success', 'A new password has been sent to your email.');
    }


    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
