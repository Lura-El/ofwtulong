<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'passport-num' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mphone' => 'required|string|max:20',
            'birthdate' => 'required|date',
            'civil-status' => 'required|string|max:255',
            'job-position' => 'required|string|max:255',
            'job-site' => 'required|string|max:255',
            'employer-name' => 'required|string|max:255',
            'employer-address' => 'required|string|max:255',
            'employer-email' => 'required|email|max:255',
            'employer-phone' => 'required|string|max:20',
            'agency-philippines' => 'required|string|max:255',
            'agency-phil-phone' => 'required|string|max:20',
            'agency-phil-email' => 'required|email|max:255',
            'foreign-agency' => 'required|string|max:255',
            'foreign-agency-phone' => 'required|string|max:20',
            'foreign-agency-email' => 'required|email|max:255',
            'kin-name' => 'required|string|max:255',
            'relationship' => 'required|string|max:255',
            'kin-phone' => 'required|string|max:20',
            'kin-address' => 'required|string|max:255',
            'kin-email' => 'required|email|max:255',
        ]);

        $exits = Membership::where('passport_num', $validatedData['passport-num'])
            ->orWhere('email_address', $validatedData['email'])
            ->orWhere('mobile_num', $validatedData['mphone'])
            ->exists();
        
        if ($exits) {
            return redirect()->back()->withErrors(['error' => 'Membership with this passport number, email, or mobile number already exists.']);
        }

        try {
            Membership::create([
            'full_name' => $validatedData['fname'],
            'passport_num' => $validatedData['passport-num'],
            'email_address' => $validatedData['email'],
            'mobile_num' => $validatedData['mphone'],
            'birthdate' => $validatedData['birthdate'],
            'civil_status' => $validatedData['civil-status'],
            'job_position' => $validatedData['job-position'],
            'job_site' => $validatedData['job-site'],
            'employer_name' => $validatedData['employer-name'],
            'employer_address' => $validatedData['employer-address'],
            'employer_email' => $validatedData['employer-email'],
            'employer_num' => $validatedData['employer-phone'],
            'recruitment_agency_phil' => $validatedData['agency-philippines'],
            'contact_num_agency' => $validatedData['agency-phil-phone'],
            'email_add_agency' => $validatedData['agency-phil-email'],
            'foreign_agency' => $validatedData['foreign-agency'],
            'contact_num_foreign_agency' => $validatedData['foreign-agency-phone'],
            'email_add_foreign_agency' => $validatedData['foreign-agency-email'],
            'next_of_kin' => $validatedData['kin-name'],
            'relationship_with_ofw' => $validatedData['relationship'],
            'contact_number_relative' => $validatedData['kin-phone'],
            'relative_address_phil' => $validatedData['kin-address'],
            'relative_email_add' => $validatedData['kin-email'],
        ]);

        return redirect()->back()->with('success', 'Membership application submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to submit membership application. Please try again later.']);

        }
    
    }

    public function index()
    {
        $members = Membership::latest()->get();

        return view('admin.membership', compact('members'));
    }

    public function fetchMembers()
    {
        return response()->json(Membership::latest()->get());
    }

}