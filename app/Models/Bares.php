<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bares extends Model
{
    use HasFactory;

    protected $table = 'bar';
    public $timestamps = false;

    public static function getBares(){   
        $bares = Bares::select('*')
        ->get();
        return $bares;
    }
}
