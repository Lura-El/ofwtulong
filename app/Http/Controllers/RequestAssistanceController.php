<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestAssistance;

class RequestAssistanceController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'first-name' => 'required|string|max:255',
            'middle-name' => 'nullable|string|max:255',
            'last-name' => 'required|string|max:255',
            'passport-number' => 'required|string|max:255',
            'iqama-num' => 'nullable|string|max:255',
            'gender' => 'required|string|max:255',
            'email-fb' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'personal-phone' => 'nullable|string|max:20',
            'other-phone' => 'nullable|string|max:20',
            'ksa-location' => 'required|string|max:255',
            'employer-name' => 'nullable|string|max:255',
            'employer-phone' => 'nullable|string|max:20',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'address' => 'nullable|string|max:255',
            'saudi-agency' => 'nullable|string|max:255',
            'ph-agency' => 'nullable|string|max:255',
            'files.*' => 'nullable|file|mimes:jpeg,png,pdf,doc,docx|max:5120',
            'complaint' => 'required|string',
        ]);

        $uploadedFiles = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('uploads', 'public');
                $uploadedFiles[] = [
                    'file_name' => $file->getClientOriginalName(),
                    'file_type' => $file->getClientMimeType(),
                    'file_path' => $path,
                ];
            }
        }

        RequestAssistance::create([
            'first_name' => $validatedData['first-name'],
            'middle_name' => $validatedData['middle-name'],
            'last_name' => $validatedData['last-name'],
            'passport_num' => $validatedData['passport-number'],
            'iqama_number' => $validatedData['iqama-num'],
            'gender' => $validatedData['gender'],
            'email_fb' => $validatedData['email-fb'],
            'occupation' => $validatedData['occupation'],
            'personal_phone_num' => $validatedData['personal-phone'],
            'other_phone_num' => $validatedData['other-phone'],
            'ksa_location' => $validatedData['ksa-location'],
            'latitude' => $validatedData['latitude'] ?? null,
            'longitude' => $validatedData['longitude'] ?? null,
            'address' => $validatedData['address'] ?? null,
            'employer_name' => $validatedData['employer-name'],
            'employer_number' => $validatedData['employer-phone'],
            'saudi_agency' => $validatedData['saudi-agency'],
            'phil_agency' => $validatedData['ph-agency'],
            'uploaded_files' => json_encode($uploadedFiles),
            'complaint' => $validatedData['complaint'],
        ]);

        return redirect('/')->with('success', 'Your request for assistance has been submitted successfully!');
    }

    public function adminIndex()
    {
        $assistanceRequests = RequestAssistance::all();
        return view('admin.request-assistance', compact('assistanceRequests'));
    }

    public function json()
    {
        return response()->json(RequestAssistance::all());
    }

}