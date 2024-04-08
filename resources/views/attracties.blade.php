@extends('layout')
@extends('header')
@extends('footer')

@section('mainContent')

<head>
    @vite('resources/css/attracties.css')
    @vite('resources/js/scrollByDrag.js')
</head>
<main>
    <section class="attractionDesc">
        <h2>Ontdek de wijde selectie aan attracties!</h2>
        <!-- TODO:
             Change attraction count to dynamically counted amount. -->
        <p>LEGOLAND Doetinchem verwelkomt iedereen met de wijde selectie aan
        hoge snelheid attracties, er zijn maarliefst {{$attracties->count();}} attracties om uit te kiezen!</p>
    </section>
    <section class="attractionContainer">
        <div id="backBtn">
            <p>^</p>
        </div>
            <div class="attractionList">
            @foreach($attracties as $attractie)

                <div class="attractionDiv">
                    <img draggable="false" src="{{$attractie->afbeeldingURL}}" alt="">
                    <h2>{{$attractie->naam}}</h2>
                    <p>{{$attractie->beschrijving}}</p>
                </div>
                
            @endforeach
            </div>
        <div id="nextBtn">
            <p>^</p>
        </div>
    </section>
</main>
@endsection