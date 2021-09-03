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
            <div class="comic-info-talent">

                <h4>Talent</h4>
                <div>

                </div>
            </div>
            <div class="comic-info-specs">
                <h4>Specs</h4>
            </div>
        </div>

    </div>   
@endsection