<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lpj extends Model
{
    protected $table = 'lpj';
    protected $fillable = [
        'file_path',
        'nama_file_asli',
    ];
}
