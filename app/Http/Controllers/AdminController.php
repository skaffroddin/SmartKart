<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Ensure only authenticated users can access this controller
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    // Admin Dashboard
    public function index()
    {
        return view('admin.dashboard');
    }
}
