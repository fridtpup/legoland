<?php

namespace App\Http\Controllers;

use App\Models\tickets;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gets all tickets from the database and saves it as an array variable.
        $tickets = Tickets::all();

        // Returns the tickets view along with the tickets array variable.
        return view('ticketprijzen')->with('tickets', $tickets);
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
    public function show(ticketprijzen $ticketprijzen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticketprijzen $ticketprijzen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ticketprijzen $ticketprijzen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticketprijzen $ticketprijzen)
    {
        //
    }
}
