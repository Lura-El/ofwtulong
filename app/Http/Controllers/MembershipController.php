<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'passport_num' => 'required|string|max:50',
            'email_address' => 'required|email',
            'mobile_num' => 'required|string',
            'birthdate' => 'required|date',
            'civil_status' => 'required|string',
            'job_position' => 'required|string',
            'job_site' => 'required|string',

            'employer_name' => 'required|string',
            'employer_address' => 'required|string',
            'employer_email' => 'required|email',
            'employer_num' => 'required|string',

            'recruitment_agency_phil' => 'required|string',
            'contact_num_agency' => 'required|string',
            'email_add_agency' => 'required|email',
            'foreign_agency' => 'required|string',
            'contact_num_foreign_agency' => 'required|string',
            'email_add_foreign_agency' => 'required|email',

            'next_of_kin' => 'required|string',
            'relationship_with_ofw' => 'required|string',
            'contact_number_relative' => 'required|string',
            'relative_address_phil' => 'required|string',
            'relative_email_add' => 'required|email',
        ]);

        Membership::create($validated);

        return redirect()->back()->with('success', 'Membership submitted successfully.');
    }

    public function index()
    {
        return view('admin.membership');
    }

    public function fetchMembers()
    {
        return response()->json(Membership::latest()->get());
    }
}
