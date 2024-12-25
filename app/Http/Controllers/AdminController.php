<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Ensure only authenticated users can access this controller and they are admins
    public function __construct()
    {
        $this->middleware('auth');       // Ensures the user is authenticated
        $this->middleware('is_admin');   // Ensures the user has the 'admin' role
    }

    // Admin Dashboard
    public function index()
    {
        return view('admin.dashboard');  // Your admin dashboard view
    }
}
