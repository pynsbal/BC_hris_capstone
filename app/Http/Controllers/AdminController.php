<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.registration');
    }
    public function leaverequestadmin()
    {
        return view('admin.leaverequestadmin');
    }
    public function documentrequestadmin()
    {
        return view('admin.documentrequestadmin');
    }
}
