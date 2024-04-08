<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Return contact view.
        return view('contact');
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
        // Validate whether these fields are filled and are within the character boundaries.
        $validated = $request->validate([
            'naam' => 'required|max:255',
            'email' => 'required|max:64',
            'bericht' => 'required',
        ]);

        // Create new contact object for within the database with the data from the form.
        $contact = new Contact;
        $contact->naam = $request->naam;
        $contact->email = $request->email;
        $contact->bericht = $request->bericht;
        $contact->save();

        // Return user to homepage.
        return redirect()->route('homepage');
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
