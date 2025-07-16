<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;


class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Invalid credentials.');
    }

        Session::put('admin_logged_in', true);
        Session::put('admin_id', $admin->id);

        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        Session::forget(['admin_logged_in', 'admin_id']);
        return redirect()->route('admin.login.form')->with('success', 'Logged out successfully.');
    }
}
