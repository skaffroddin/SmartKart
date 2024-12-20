<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Default route (welcome page)
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

// Redirect logged-in users based on their role
Route::get('/home', function () {
    if (auth()->check()) {
        // Check if user is admin
        return auth()->user()->is_admin
            ? redirect()->route('admin.dashboard')
            : redirect()->route('user.dashboard');
    }
    return redirect()->route('login'); // If not logged in, redirect to login
});

// Admin routes (protected by 'is_admin' middleware)
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// User routes (protected by 'auth' middleware)
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});
