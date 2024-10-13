<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user(); // This gets the currently authenticated user

        // Check the user's role and pass user info to the appropriate view
        if ($user->role == 'admin') {
            // Return the admin dashboard view with user info
            return view('dashboard', compact('user')); // Pass the user data to the view
        } elseif ($user->role == 'employee') {
            // Return the employee dashboard view with user info
            return view('employee.employeeDashboard', compact('user')); // Pass the user data to the view
        }

        // Fallback view if the role is not recognized
        return view('home');
    }
}
