<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// URL Index
Route::get('/', function () {
    $user = ['name' => 'Fariz', 'role' => 'teller'];
    return view('pages.home', $user);
});

Route::redirect('/home', '/');

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



