@extends('templates.basePage')

@section('title','Comics')

@section('content')

@php
    $comic =$comicsList[$id-1]
@endphp

    <div class="blue">
        <div class="container">
            <img src="{{$comic['thumb']}}" alt="">

        </div>

    </div>

    <div class="container">
        <div class="comic-container">

            <div class="comic-container-text">

                <h1>{{ $comic['title'] }}</h1>

                <div class="green-table">
                    <div class="green-table-plus">
                        <div class="info">U.S. Price: {{ $comic['price']  }}</div>
                        <div class="info">AVAILABLE</div>
                    </div>
                    <div class="info">Check Availablity</div>                     
                </div>

                <div>
                   <p>{{ $comic['description']}}</p>
                </div>

            </div>
            <div class="comic-container-img">
                <img src="/img/adv.jpg" alt="">

            </div>

        </div>


        <div class="comic-info">
            <div class="comic-info-cont">

                <h2>Talent</h2>
                <div class="comic-info-cont-inner">
                    <h4>Art by:</h4>
                    <p>
                        @foreach($comic['artists'] as $artist)
                            {{ $artist }},

                        @endforeach
                    </p>
                </div>
                <div class="comic-info-cont-inner">
                    <h4>Written by:</h4>
                    <p>
                        @foreach($comic['writers'] as $writer)
                            {{ $writer }},

                        @endforeach
                    </p>
                </div>
            </div>
            <div class="comic-info-cont">
                <h2>Specs</h2>
                <div class="comic-info-cont-inner">
                    <h4>Series:</h4>
                    <div> {{ $comic['series'] }}</div> 
                </div>
                <div class="comic-info-cont-inner">
                    <h4>U.S. Price:</h4>
                    <div>{{ $comic['price'] }}</div> 
                </div>
                <div class="comic-info-cont-inner">
                    <h4>On Sale Date:</h4>
                    <div>{{ $comic['sale_date'] }}</div> 
                </div>           
            </div>
        </div>

    </div>   
@endsection