<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeC extends Controller
{
    public function index(){
        $user = ['name' => 'Fariz', 'role' => 'teller'];
        return view('pages.home', $user);
    }
    public function about(){
        $user = ['name' => 'Renaldi', 'role' => 'asing'];
        return view('pages.about', $user);
        
    }
    public function contact(){
        $data = [
            "person" => ["Rizky", "Gavin", "Firdaus", "Dzaky", "Iqbal"]
        ];
        return view('pages.contact', $data);
    }
}
