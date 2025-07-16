<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\RequestAssistanceController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/contact-us', [ContactUsController::class, 'submit'])->name('contact.submit');
Route::post('/membership', [MembershipController::class, 'submit'])->name('membership.submit');
Route::post('/request-assistance', [RequestAssistanceController::class, 'submit'])->name('request.assistance.submit');

// Admin Login Routes
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin Routes
Route::middleware('admin.auth')->group(function () {
    Route::get('/admin/dashboard', fn () => view('admin.dashboard'))->name('admin.dashboard');
    Route::get('/admin/contact-us', fn () => view('admin.contact-us'))->name('admin.contact');
    Route::get('/admin/membership', fn () => view('admin.membership'))->name('admin.membership');
    Route::get('/admin/request-assistance', fn () => view('admin.request-assistance'))->name('admin.request');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});


require __DIR__.'/auth.php';