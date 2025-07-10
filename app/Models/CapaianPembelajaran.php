<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CapaianPembelajaran extends Model
{
    protected $table = 'capaian_pembelajaran';

    protected $fillable = [
        'judul',
        'file_path',
        'nama_file_asli',
        'mata_pelajaran',
        'tingkat_kelas',
        'tahun_ajaran',
    ];
}
