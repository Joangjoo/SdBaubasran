<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    protected $table = 'struktur_organisasi';
    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'kelas_mengajar',
        'mapel_mengajar',
        'foto',
        'periode_jabatan',
    ];
}
