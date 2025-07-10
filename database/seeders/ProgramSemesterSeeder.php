<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProgramSemester;

class ProgramSemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgramSemester::truncate();
        $programs = [
            [
                'tahun_ajaran' => '2024/2025',
                'mata_pelajaran' => 'Matematika',
                'tingkat_kelas' => 'Kelas 1',
                'semester' => 'ganjil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahun_ajaran' => '2024/2025',
                'mata_pelajaran' => 'Bahasa Indonesia',
                'tingkat_kelas' => 'Kelas 1',
                'semester' => 'ganjil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahun_ajaran' => '2023/2024',
                'mata_pelajaran' => 'IPAS',
                'tingkat_kelas' => 'Kelas 4',
                'semester' => 'genap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahun_ajaran' => '2023/2024',
                'mata_pelajaran' => 'PJOK',
                'tingkat_kelas' => 'Kelas 5',
                'semester' => 'genap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahun_ajaran' => '2024/2025',
                'mata_pelajaran' => 'Seni Budaya',
                'tingkat_kelas' => 'Kelas 2',
                'semester' => 'ganjil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        ProgramSemester::insert($programs);
    }
}
