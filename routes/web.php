<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {   ---> percorso url visualizzato dall'utente
//     return view('home');        ---> ppercorso nel proggetto
// })->name('homepage');           ---> ppercorso url salvato in 'homepage' 


Route::get('/', function () {  
    
    $comicsArray = config('comics');  //creiamo il nostro array

    return view('home',[
        'comicsList' => $comicsArray  //diamo un nome l'array
    ]);       

})->name('homepage');          

Route::get('/comics', function() {

    $comicsArray = config('comics');

    return view('comics',[
        'comicsList' => $comicsArray
    ]);
})->name('comics');
