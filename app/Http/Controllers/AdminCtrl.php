<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCtrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dash(){
        return view('adminlte/indexadmin');
    }
}
