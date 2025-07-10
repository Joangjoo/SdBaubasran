<?php

namespace Database\Seeders;

use App\Models\TugasMurid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TugasMuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TugasMurid::truncate();

        $tugas = [
            [
                'nama_tugas' => 'Tugas Menggambar Rumah',
                'file_path' => 'tugas-murid/tugas1.docx',
                'nama_file_asli' => 'tugas1.docx',
                'mata_pelajaran' => 'Seni Budaya',
                'tingkat_kelas' => 'Kelas 2',
                'tahun_ajaran' => '2024/2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_tugas' => 'Tugas Rangkuman Cerita Malin Kundang',
                'file_path' => 'tugas-murid/tugas2.csv',
                'nama_file_asli' => 'tugas2.csv',
                'mata_pelajaran' => 'Bahasa Indonesia',
                'tingkat_kelas' => 'Kelas 4',
                'tahun_ajaran' => '2024/2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_tugas' => 'Tugas Latihan Perkalian',
                'file_path' => 'tugas-murid/tugas3.pdf',
                'nama_file_asli' => 'tugas3.pdf',
                'mata_pelajaran' => 'Matematika',
                'tingkat_kelas' => 'Kelas 3',
                'tahun_ajaran' => '2023/2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        TugasMurid::insert($tugas);
    }
}
