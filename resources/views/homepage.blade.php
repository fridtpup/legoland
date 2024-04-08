@extends('layout')
@extends('header')
@extends('footer')

@section('mainContent')
<head>
    @vite('resources/css/homepage.css')
</head>
<main>
    <section class="description">
        <h2>Welkom bij Legoland Doetinchem!</h2>
        <p>Legoland Doetinchem is een zeer 
        episch attractiepark in Doetinchem met maarliefst 5 attracties! Kom nu!!!!!!!!!!!</p>
    </section>
    <nav class="menu">
        <ul>
            <li><a href="{{ route('attracties') }}">Attracties</a></li> 
            <li><a href="{{ route('openingstijden') }}">Openingstijden</a></li>
            <li><a href="{{ route('ticketprijzen') }}">Ticketprijzen</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</main>
@endsection
