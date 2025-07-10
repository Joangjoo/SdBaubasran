<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankSoal extends Model
{
    protected $table = 'latihan_soal';

    protected $fillable = [
        'nama_soal',
        'file_path',
        'nama_file_asli',
        'mata_pelajaran',
        'tingkat_kelas',
        'semester',
        'tahun_ajaran',
    ];
}
