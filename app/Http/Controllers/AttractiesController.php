<?php

namespace App\Http\Controllers;

use App\Models\attracties;
use Illuminate\Http\Request;

class AttractiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gets all attractions from the database and saves it as an array variable.
        $attracties = Attracties::all();

        // Returns the attractions view along with the attractions array variable. 
        return view('attracties')->with('attracties', $attracties);
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
    public function show(attracties $attracties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(attracties $attracties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, attracties $attracties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(attracties $attracties)
    {
        //
    }
}
