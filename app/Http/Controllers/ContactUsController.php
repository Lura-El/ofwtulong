<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation failed', 'errors' => $validator->errors()], 422);
        }      

        ContactUs::create([
            'name' => $request->name,
            'email_address' => $request->email,
            'phone_number' => $request->phone,
            'message' => $request->message,
        ]);

        return response()->json(['message' => 'Message sent successfully!']);
    }

    public function fetch()
    {
        $contacts = ContactUs::latest()->get();

        return response()->json($contacts);
    }

}