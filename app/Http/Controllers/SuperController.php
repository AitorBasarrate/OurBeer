<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function mapa(){
        return view('mapa');
    }

    public function lista(){
        return view('lista');
    }
}
