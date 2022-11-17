<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;


// URL Index
Route::redirect('/', '/home');
Route::get('/home', [HomeC::class, 'index']);
Route::get('/about', [HomeC::class, 'about']);
Route::get('/contact', [HomeC::class, 'contact']);
Route::get('/', function () {
    $user = ['name' => 'Fariz', 'role' => 'teller'];
    return view('pages.home', $user);
});

Route::get('/home', [HomeC::class, 'index']);


Route::get('about', function (){
    $user = ['name' => 'Renaldi', 'role' => 'asing'];
    return view('pages.about', $user);
});

Route::get('contact', function (){
    $data = [
        "person" => ["Rizky", "Gavin", "Firdaus", "Dzaky", "Iqbal"]
    ];
    return view('pages.contact', $data);
});



