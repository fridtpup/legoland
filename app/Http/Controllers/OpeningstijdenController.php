<?php

namespace App\Http\Controllers;

use App\Models\openingstijden;
use Illuminate\Http\Request;

class OpeningstijdenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gets all business hours from the database and saves it as an array variable.
        $openingstijden = Openingstijden::all();

        // Returns the business hours view along with the business array variable.
        return view('openingstijden')->with('openingstijden', $openingstijden);
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
    public function show(openingstijden $openingstijden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(openingstijden $openingstijden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, openingstijden $openingstijden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(openingstijden $openingstijden)
    {
        //
    }
}
