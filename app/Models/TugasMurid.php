<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TugasMurid extends Model
{
    protected $table = 'tugas_murid';

    protected $fillable = [
        'nama_tugas',
        'file_path',
        'nama_file_asli',
        'mata_pelajaran',
        'tingkat_kelas',
        'tahun_ajaran',
        'semester',
    ];
}
