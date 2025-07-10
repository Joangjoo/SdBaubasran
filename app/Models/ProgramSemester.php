<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramSemester extends Model
{
    protected $table = 'program_semester';

    protected $fillable = [
        'tahun_ajaran',
        'mata_pelajaran',
        'tingkat_kelas',
        'semester',
    ];
}
