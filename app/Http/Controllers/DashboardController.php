<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contact_us')
            ->select('id', 'name', 'email_address as email')
            ->get()
            ->map(function ($item) {
                $item->category = 'contact-us';
                return $item;
            });

        $members = DB::table('memberships')
            ->select('id', 'full_name as name', 'email_address as email')
            ->get()
            ->map(function ($item) {
                $item->category = 'membership';
                return $item;
            });

        $requests = DB::table('request_assistance')
            ->select('id', DB::raw("CONCAT(first_name, ' ', COALESCE(middle_name, ''), ' ', last_name) as name"), 'email_fb as email')
            ->get()
            ->map(function ($item) {
                $item->category = 'request-assistance';
                return $item;
            });

        $entries = $contacts->merge($members)->merge($requests)->sortByDesc('id')->values();

        return view('admin.dashboard', [
            'entries' => $entries,
            'contactCount' => $contacts->count(),
            'memberCount' => $members->count(),
            'requestCount' => $requests->count()
        ]);
    }

    public function fetchLiveData()
    {
        $contacts = DB::table('contact_us')
            ->select('id', 'name', 'email_address as email')
            ->get()
            ->map(function ($item) {
                $item->category = 'contact-us';
                return $item;
            });

        $members = DB::table('memberships')
            ->select('id', 'full_name as name', 'email_address as email')
            ->get()
            ->map(function ($item) {
                $item->category = 'membership';
                return $item;
            });

        $requests = DB::table('request_assistance')
            ->select('id', DB::raw("CONCAT(first_name, ' ', COALESCE(middle_name, ''), ' ', last_name) as name"), 'email_fb as email')
            ->get()
            ->map(function ($item) {
                $item->category = 'request-assistance';
                return $item;
            });

        $entries = $contacts->merge($members)->merge($requests)->sortByDesc('id')->values();

        return response()->json([
            'contactCount' => $contacts->count(),
            'memberCount' => $members->count(),
            'requestCount' => $requests->count(),
            'entries' => $entries,
        ]);
    }
}
