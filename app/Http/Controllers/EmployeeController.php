<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all employees from the database
        $employees = Employee::all();

        // Pass the $employees variable to the 'employees.index' view
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employee.personalInfo');
    }

    public function familyBackground(Employee $employee)
    {
        return view('employee.familyBackground');
    }

    public function educationalBackground(Employee $employee)
    {
        return view('employee.educationalBackground');
    }
    public function healthDetails(Employee $employee)
    {
        return view('employee.healthDetails');
    }   
    public function dependents(Employee $employee)
    {
        return view('employee.dependents');
    }   
    public function seminarsTraining(Employee $employee)
    {
        return view('employee.seminarsTraining');
    }   
    public function researchPublication(Employee $employee)
    {
        return view('employee.researchPublicatioN');
    }   


    public function payslip()
    {
        // Pass the employee data to the view
        return view('employee.employeePayslip');
    }
    public function leave(Employee $employee)
    {

        // Pass the employee data to the view
        return view('employee.employeeLeave');
    }

    public function documentRequest()
    {
        // Pass the employee data to the view or handle it accordingly
        return view('employee.employeeRequestDocuments');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
