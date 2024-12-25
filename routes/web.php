<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
});

// Social Login Routes
Route::get('login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [AuthController::class, 'handleGoogleCallback']);
Route::get('login/facebook', [AuthController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [AuthController::class, 'handleFacebookCallback']);
Route::get('login/github', [AuthController::class, 'redirectToGitHub'])->name('login.github');
Route::get('login/github/callback', [AuthController::class, 'handleGitHubCallback']);

// Admin Routes
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Products Management
    Route::resource('/admin/products', ProductController::class);

    // Categories Management
    Route::resource('/admin/categories', CategoryController::class);

    // Orders Management
    Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');

    // Users Management
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
});

// User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

    // Logout Route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
