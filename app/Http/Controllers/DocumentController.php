<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
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
        $validated = $request->validate([
            'dateofrequest' => 'required|date',
            'name' => 'required|string|max:255',
            'requestedDocument' => 'required|string|max:255',
            'purpose' => 'required|string|max:255',
            'orNumber' => 'required|string|max:255',
        ]);
    
        // Assuming `name` contains full name, split it into parts for storage
        $nameParts = explode(' ', $validated['name']);
        $firstName = $nameParts[0];
        $lastName = $nameParts[count($nameParts) - 1];
        $middleName = count($nameParts) > 2 ? implode(' ', array_slice($nameParts, 1, -1)) : null;
    
        // Create the document
        Document::create([
            'employee_id' => auth()->id(), // Use authenticated user's ID
            'firstName' => $firstName,
            'middleName' => $middleName,
            'lastName' => $lastName,
            'requestedDocument' => $validated['requestedDocument'],
            'purpose' => $validated['purpose'],
            'orNumber' => $validated['orNumber'],
            'status' => 'pending', // Default status
        ]);
    
        return redirect()->back()->with('success', 'Document request submitted successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
