<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cervezas;
use App\Models\Bares;

class SuperController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function mapa(){

        $bares = Bares::getBares();
        return view('mapa')->with('bares', $bares);
    }

    public function lista(){

        $Cervezas = Cervezas::getCervezas();
        return view('lista')->with('Cervezas', $Cervezas);
    }
}
