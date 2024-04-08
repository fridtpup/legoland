@extends('layout')
@extends('header')
@extends('footer')

@section('mainContent')
<head>
    @vite('resources/css/ticketprijzen.css')
</head>
<main>
    <section class="ticketPriceDesc">  
        <h2>Ticketprijzen Legoworld Doetinchem</h2>
    </section>
    <section class="ticketPriceContainer">
        <!-- Gets all of the tickets from the database and parses them as each an individual division. -->
        @foreach($ticketprijzen as $ticket) 
        <div class="ticket">
            <div class="ticketName">
                <p>
                    {{$ticket->naam}} <!-- Gets the name from the ticket -->
                </p>
            </div>
            <div class="ticketDesc">
                <p>
                    {{$ticket->beschrijving}} <!-- Gets the description from the ticket -->
                </p> 
            </div>
            <div class="ticketPrice">
                <p>
                    €{{number_format($ticket->prijs, 2, '.', ',')}} <!-- Gets the price from the ticket and rounds it up to 2 decimals -->
                </p> 
            </div>
        </div>
        @endforeach
    </section>
    <a href="{{ route('orderPageRef') }}" class="orderLink">
        <div class="orderBtn">Bestel tickets</div>
    </a>
</main>
@endsection