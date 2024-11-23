<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Validate input data
        $request->validate([
            'leavetype' => 'required|string|max:255',
            'otherreasonforleave' => 'nullable|string|max:255',
            'resonforleave' => 'nullable|string',
            'numberofdays' => 'required|integer|min:1|max:100',
            'dateofleavefrom' => 'required|date|before_or_equal:dateofleaveto',  // Corrected
            'dateofleaveto' => 'required|date|after_or_equal:dateofleavefrom',
        ]);

        // Save leave application
        Leave::create([
            'employee_id' => Auth::id(),
            'natureOfLeave' => $request->leavetype,
            'others' => $request->otherreasonforleave,
            'reason' => $request->reasonforleave,
            'numberOfDays' => $request->numberofdays,
            'fromDate' => $request->dateofleavefrom,
            'toDate' => $request->dateofleaveto,
            'status' => 'Pending', // Default status
        ]);

        return redirect()->route('dashboard')->with('success', 'Leave application submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leave $leave)
    {
        //
    }
}
