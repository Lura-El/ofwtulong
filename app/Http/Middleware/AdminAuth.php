<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('admin_logged_in')) {
            return redirect()->route('admin.login.form')->with('error', 'Please log in first.');
        }

        return $next($request);
    }
}
