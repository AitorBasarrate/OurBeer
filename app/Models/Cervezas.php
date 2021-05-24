<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cervezas extends Model
{
    use HasFactory;

    protected $table = 'cerveza';
    public $timestamps = false;

    public static function getCervezas(){   
        $Cervezas = Cervezas::select('*')
        ->get();
        return $Cervezas;
    }
}
