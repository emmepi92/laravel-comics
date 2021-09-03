@extends('templates.basePage')

@section('title','Homepage')

@section('content')

    <div class="main-comics">
        <div class="container relative">
            <div class="current-serie-label"> CURRENT SERIES </div>

        </div>
        <div class="container">
            @foreach ($comicsList as $comic)
                <div class="single-comic">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h4>{{ $comic['series']}}</h4>
                </div>
    
            @endforeach
        </div>
    </div>

    @include ('templates.blueRow')
@endsection