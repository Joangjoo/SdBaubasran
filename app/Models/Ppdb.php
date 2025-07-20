<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $table = 'ppdbs';
    protected $fillable = [
        'judul',
        'poin',
        'urutan',
        'warna',
    ];
}
