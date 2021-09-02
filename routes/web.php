<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {  //percorso url visualizzato dall'utente
    return view('home');       //percorso nel proggetto
})->name('homepage');          //percorso url salvato in 'homepage' 

Route::get('/comics', function() {
    return view('comics');
})->name('comics');
