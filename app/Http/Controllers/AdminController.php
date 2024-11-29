<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Leave;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        $departments = Department::all();
        return view('admin.registration', ['departments' => $departments]);
    }
    public function leaverequestadmin(Request $request)
    {
        // Fetch search and filter parameters
        $search = $request->input('search');
        $filterDate = $request->input('filter_date');

        // Query the leaves table and join with users and departments
        $leaves = Leave::query()
            ->join('users', 'leaves.employee_id', '=', 'users.id') // Join with users table
            ->join('departments', 'users.dept_id', '=', 'departments.id') // Join with departments table
            ->when($search, function ($query, $search) {
                $query->where('users.employee_id', 'like', "%$search%")
                    ->orWhere('users.firstName', 'like', "%$search%")
                    ->orWhere('users.lastName', 'like', "%$search%");
            })
            ->when($filterDate, function ($query, $filterDate) {
                $query->where('leaves.fromDate', '<=', $filterDate)
                    ->where('leaves.toDate', '>=', $filterDate);
            })
            ->select(
                'leaves.*',
                'users.firstName',
                'users.lastName',
                'users.employee_id',
                'departments.name as department_name'
            ) // Select relevant columns
            ->orderBy('leaves.created_at', 'desc')
            ->get();

        // Pass data to the view
        return view('admin.leaverequestadmin', compact('leaves'));
    }

    public function documentrequestadmin()
    {
        return view('admin.documentrequestadmin');
    }

    public function register(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'middleName' => 'nullable|string',
            'employee_id' => 'required|integer|unique:users,employee_id', // Ensure unique employee_id in the users table
            'position' => 'nullable|string',
            'dept_id' => 'required|exists:departments,id', // Ensure dept_id exists in departments table
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:8',
            'role' => 'required|in:employee,admin', // Ensure the role is either 'employee' or 'admin'
            'date_started' => 'nullable|date', // Optional field, if provided must be a valid date
        ]);

        // Create a new user
        $user = User::create([
            'firstName' => $validated['firstName'],
            'middleName' => $validated['middleName'],
            'lastName' => $validated['lastName'],
            'email' => $validated['email'], // Ensure email is passed
            'employee_id' => $validated['employee_id'],
            'position' => $validated['position'],
            'dept_id' => $validated['dept_id'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'], // Assign the correct role (either 'employee' or 'admin')
            'date_started' => $validated['date_started'] ?? now(), // Use provided date_started or default to now
        ]);

        // Redirect or return response
        return redirect()->route('dashboard')->with('success', 'User successfully registered!');
    }
}
