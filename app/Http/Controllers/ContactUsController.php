<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        ContactUs::create([
            'name' => $validatedData['name'],
            'email_address' => $validatedData['email'],
            'phone_number' => $validatedData['phone'],
            'message' => $validatedData['message'],
        ]);

        return redirect('/')->with('success', 'Your message has been sent successfully!');
    }
}