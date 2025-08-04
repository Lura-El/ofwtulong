<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class LoginController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20'
        ]);

        ContactUs::create([
            'email_address' => $validatedData['email'],
            'phone_number' => $validatedData['phone']
        ]);

        return redirect('/')->with('success', 'Login Succesfully!');
    }
}