<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  // Ensures the user is authenticated
    }

    public function dashboard()
    {
        return view('user.dashboard');   // Your user dashboard view
    }
}
