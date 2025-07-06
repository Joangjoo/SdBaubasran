<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoalKenaikanKelas extends Model
{
    protected $table = 'soal_kenaikan_kelas';

    protected $fillable = [
        'judul',
        'deskripsi',
        'file_path',
        'nama_file_asli',
        'mata_pelajaran',
        'tingkat_kelas',
        'tahun_ajaran',
        'nama_pengunggah',
    ];
}
