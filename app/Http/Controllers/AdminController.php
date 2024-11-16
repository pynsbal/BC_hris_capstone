<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.registration');
    }
}
