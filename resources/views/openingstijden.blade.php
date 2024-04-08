@extends('layout')
@extends('header')
@extends('footer')

@section('mainContent')

<head>
    @vite('resources/css/openingstijden.css')
</head>
<main> 
    <section class="openTimeDesc">  
        <h2>Openingstijden Legoworld Doetinchem</h2>
    </section>
    <section class="openTimeTable">
        @foreach($openingstijden as $openingstijd)
        <div class="day">
            <div class="dayTxt">
                <p>{{$openingstijd->dag}}</p>
            </div>
            <div class="timeTxt">
                <p>{{$openingstijd->tijd_open}} - {{$openingstijd->tijd_dicht}}</p>
            </div>
        </div>
        @endforeach
    </section>
</main>

@endsection