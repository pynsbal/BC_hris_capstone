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
        // Check the authenticated user's role
        if (Auth::user()->role == 'admin') {
            // Return the admin dashboard view
            return view('dashboard');
        } elseif (Auth::user()->role == 'employee') {
            // Return the employee dashboard view located in the 'employee' folder
            return view('employee.employeeDashboard');
        }

        // Fallback view if the role is not recognized
        return view('home');
    }
}
