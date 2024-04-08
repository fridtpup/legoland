@extends('layout')
@extends('header')
@extends('footer')

@section('mainContent')
<head>
    @vite('resources/css/contact.css')
</head>
<main>  
    <section class="contactFormDesc">  
        <h2>Neem contact op!</h2>
    </section>
    <section class="contactForm">
        <form method="post" action="{{ route('postContact') }}">
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
                <div class="formRow">
                    <label for="naam">Naam:</label>
                    <input type="text" name="naam">
                </div>
                <div class="formRow">
                    <label for="email">Email:</label>
                    <input type="text" name="email">
                </div>
                <div class="formRow">
                    <label for="bericht">Bericht:</label>
                    <textarea name="bericht" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="formRow">
                    <input class="submitBtn" type="submit">
                </div>
            </form>
    </section>
</main>
@endsection