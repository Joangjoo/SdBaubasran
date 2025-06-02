<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visi extends Model
{
    protected $fillable = [
        'visi',
    ];

    public static function getVisiAll()
    {
        return self::all();
    }
}
