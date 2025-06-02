<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Linimasa extends Model
{
    protected $fillable = [
        'judul',
        'foto',
        'deskripsi',
    ];

     protected static function booted()
    {
        static::addGlobalScope('ordered', function (Builder $builder) {
            $builder->orderBy('created_at', 'asc'); 
        });
    }

    
}
