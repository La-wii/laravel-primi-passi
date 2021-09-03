<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $data = [
        'hello' =>'Hello World',
        'paragrafo' =>'Questo è un paragrafo sulla pagina home'
    ];
    return view('home',$data);
})->name('homepage');

Route::get('/about-us', function () {
    $data = [
        'title' =>'Pagina about us',
        'paragrafo' =>'Questo è un paragrafo'
    ];
    return view('about-us',$data);
})->name('about-us');

Route::get('/contact', function () {
    $data = [
        'title' =>'Pagina contatti',
        'nome' =>'Pinco Pallino',
        'indirizzo' =>'Via Verdi 11, Milano',
        'email' =>'info@email.com',
        'telefono' =>'02 123 123 12'
    ];
    return view('contact',$data);
})->name('contact');