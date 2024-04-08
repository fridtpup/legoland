<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use App\Models\tickets;
use App\Models\orderInformation;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gets all tickets from the database and saves it as an array variable.
        $tickets = Tickets::all();

        // Returns the order view along with the tickets array variable.
        return view('order')->with('tickets', $tickets);
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
        // Creates total ticket variable to check whether not all fields of the tickets are left empty.
        $totalTickets = 0;

        // Checks if any tickets are ordered before even starting with making an order.
        foreach($request->tickets as $ticketID => $amount)
        {
            if ($amount != 0)
            {
                $totalTickets += $amount;
            }
        }

        // If the total amount is more then 0 an the order information (person ordering, email of said person and their phone number) will be saved in the database.
        if ($totalTickets != 0)
        {
            $validated = $request->validate([
                'naam' => 'required|max:255',
                'telefoon' => 'required|max:64',
                'email' => 'required|email',
            ]);

            $orderInfo = new OrderInformation;
            $orderInfo->naam = $request->naam;
            $orderInfo->telefoon_nummer = $request->telefoon;
            $orderInfo->email = $request->email;
            $orderInfo->save();

            // Create an database row within the order table for each ticket type a person has ordered.
            foreach($request->tickets as $ticketID => $amount)
            {
                if ($amount != 0)
                {
                    $order = new Order;
                    $order->order_id = $orderInfo->id; // Links the order to the order info query through a foreign key.
                    $order->ticket_id = $ticketID; 
                    $order->hoeveelheid = $amount;
                    $order->save();
                }
            }

            return view('orderConfirmation');
        }
        else
        {
            // Creates new error message when all ticket fields are left empty or 0.
            throw ValidationException::withMessages(['Koop ten minste een ticket.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
}
