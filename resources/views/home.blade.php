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

                    <a href="{{ route('comics', [ 'id' => $loop->iteration]) }}">
                    
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h4>{{ $comic['series']}}</h4>
                    </a>
                </div>
    
            @endforeach
        </div>
    </div>

    @include ('templates.blueRow')
@endsection