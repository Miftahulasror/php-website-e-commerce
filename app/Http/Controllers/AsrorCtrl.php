<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsrorCtrl extends Controller
{
    //
    public function home(){
        return view('index',[
            "title" => "Home"
        ]);
    }
    public function about(){
        return view('about',[
            "title" => "About"
        ]);
    }
    public function contact(){
        return view('kontak',[
            "title" => "Contact"
        ]);
    }
    public function produk(){
        return view('produk1',[
            "title" => "Product",
            "nama" => "Miftahul Asror Regowo",
            "email" => "regowom00@gmail.com"
        ]);
    }
}
