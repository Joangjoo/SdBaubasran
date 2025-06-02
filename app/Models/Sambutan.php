<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sambutan extends Model
{
    protected $fillable = [
        'motivasi',
        'sambutan',
        'nama',
        'jabatan',
        'foto',
    ];

    public static function getSambutan()
    {
        return self::first();
    }
}
