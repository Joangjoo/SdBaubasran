<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    protected $fillable = [
        'misi',
    ];

    public static function getMisiAll()
    {
        return self::all();
    }
}
