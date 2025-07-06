<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LatihanSoal extends Model
{
    protected $table = 'latihan_soal';

     protected $fillable = [
        'judul',
        'deskripsi',
        'file_path',
        'nama_file_asli',
        'mata_pelajaran',
        'tingkat_kelas',
        'semester',
        'tahun_ajaran',
        'nama_pengunggah',
    ];
}
