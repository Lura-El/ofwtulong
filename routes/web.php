<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\RequestAssistanceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;

Route::get('/', fn () => view('welcome'));

Route::get('/contact-us', function () { return view('pages.contact-us');})->name('contact');
Route::get('/membership', function () { return view('pages.membership');})->name('membership');
Route::get('/request-assistance', function () { return view('pages.request-assistance');})->name('request.assistance');

Route::post('/contact-us', [ContactUsController::class, 'submit'])->name('contact.submit');
Route::post('/membership', [MembershipController::class, 'submit'])->name('membership.submit');
Route::post('/request-assistance', [RequestAssistanceController::class, 'submit'])->name('request.assistance.submit');

Route::get('/admin/contact-fetch', [ContactUsController::class, 'fetch'])->name('contact.fetch');
Route::get('/admin/membership/json', [MembershipController::class, 'fetchMembers']);
Route::get('/admin/request-assistance/json', [RequestAssistanceController::class, 'json']);
Route::get('/admin/dashboard/json', [DashboardController::class, 'fetchLiveData'])->middleware('admin.auth')->name('admin.dashboard.json');

// Admin login/logout
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin dashboard and pages
Route::middleware('admin.auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/contact-us', fn () => view('admin.contact-us'))->name('admin.contact');
    Route::get('/admin/membership', [MembershipController::class, 'index'])->name('admin.membership');
    Route::get('/admin/request-assistance', [RequestAssistanceController::class, 'adminIndex'])->name('admin.request');
});

require __DIR__.'/auth.php';
