@extends('layout')
@extends('header')
@extends('footer')

@section('mainContent')

<head>
    @vite('resources/css/order.css')
</head>
<main>
    <section class="orderDesc">  
        <h2>Tickets bestellen</h2>
    </section>
    <section class="orderContainer">
        <form class="orderForm" method="post" action="{{ route('orderTicket') }}">
            @csrf
            
            <!-- Error handling (validation check) -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="noStyle">
                        @foreach ($errors->all() as $error)
                            <li class="redTxt">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="order">
                <label for="naam">Naam</label>
                <input type="text" name="naam" placeholder="Naam">
            </div>
            <div class="order">
                <label for="telefoon">Telefoon Nr.</label>
                <input type="text" name="telefoon" placeholder="Telefoon Nr.">
            </div>
            <div class="order">
                <label for="email">E-mailadres</label>
                <input type="email" name="email" placeholder="E-mailadres">
            </div>
            <br>
            @foreach($tickets as $key => $value)
                <div class="order">
                    <label for="{{ $value->id }}">{{$value->naam}}</label>
                    <input type="number" name="tickets[{{ $value->id }}]" placeholder="Hoeveel">
                </div>
            @endforeach
            <div class="order">
                <input class="subBtn" type="submit" value="Bestel">
            </div>
        </form>
    </section>

@endsection