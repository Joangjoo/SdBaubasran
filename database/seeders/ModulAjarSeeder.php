<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ModulAjar;

class ModulAjarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModulAjar::truncate();

        $modulAjars = [
            [
                'judul' => 'Modul Ajar Matematika: Bilangan Cacah',
                'file_path' => 'modul-ajar/dummy1.pdf',
                'nama_file_asli' => 'dummy1.pdf',
                'mata_pelajaran' => 'Matematika',
                'tingkat_kelas' => 'Kelas 1',
                'semester' => 'ganjil',
                'tahun_ajaran' => '2024/2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Modul Ajar Bahasa Indonesia: Mengenal Huruf',
                'file_path' => 'modul-ajar/dummy2.pdf',
                'nama_file_asli' => 'dummy2.pdf',
                'mata_pelajaran' => 'Bahasa Indonesia',
                'tingkat_kelas' => 'Kelas 1',
                'semester' => 'ganjil',
                'tahun_ajaran' => '2024/2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Modul Ajar IPAS: Tumbuhan di Sekitarku',
                'file_path' => 'modul-ajar/dummy3.pdf',
                'nama_file_asli' => 'dummy3.pdf',
                'mata_pelajaran' => 'IPAS',
                'tingkat_kelas' => 'Kelas 4',
                'semester' => 'ganjil',
                'tahun_ajaran' => '2024/2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Modul Ajar Seni Budaya: Menggambar Bentuk',
                'file_path' => 'modul-ajar/dummy4.pdf',
                'nama_file_asli' => 'dummy4.pdf',
                'mata_pelajaran' => 'Seni Budaya',
                'tingkat_kelas' => 'Kelas 2',
                'semester' => 'genap',
                'tahun_ajaran' => '2023/2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Modul Ajar PJOK: Gerak Lokomotor',
                'file_path' => 'modul-ajar/dummy5.pdf',
                'nama_file_asli' => 'dummy5.pdf',
                'mata_pelajaran' => 'PJOK',
                'tingkat_kelas' => 'Kelas 3',
                'semester' => 'ganjil',
                'tahun_ajaran' => '2024/2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Modul Ajar Matematika: Pecahan Sederhana',
                'file_path' => 'modul-ajar/dummy6.pdf',
                'nama_file_asli' => 'dummy6.pdf',
                'mata_pelajaran' => 'Matematika',
                'tingkat_kelas' => 'Kelas 4',
                'semester' => 'genap',
                'tahun_ajaran' => '2023/2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Modul Ajar Bahasa Inggris: Greetings',
                'file_path' => 'modul-ajar/dummy7.pdf',
                'nama_file_asli' => 'dummy7.pdf',
                'mata_pelajaran' => 'Bahasa Inggris',
                'tingkat_kelas' => 'Kelas 5',
                'semester' => 'ganjil',
                'tahun_ajaran' => '2024/2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Modul Ajar PAI: Rukun Iman',
                'file_path' => 'modul-ajar/dummy8.pdf',
                'nama_file_asli' => 'dummy8.pdf',
                'mata_pelajaran' => 'Pendidikan Agama Islam',
                'tingkat_kelas' => 'Kelas 2',
                'semester' => 'ganjil',
                'tahun_ajaran' => '2024/2025',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Modul Ajar PPKN: Simbol Pancasila',
                'file_path' => 'modul-ajar/dummy9.pdf',
                'nama_file_asli' => 'dummy9.pdf',
                'mata_pelajaran' => 'PPKN',
                'tingkat_kelas' => 'Kelas 3',
                'semester' => 'genap',
                'tahun_ajaran' => '2023/2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Modul Ajar IPAS: Rantai Makanan',
                'file_path' => 'modul-ajar/dummy10.pdf',
                'nama_file_asli' => 'dummy10.pdf',
                'mata_pelajaran' => 'IPAS',
                'tingkat_kelas' => 'Kelas 5',
                'semester' => 'genap',
                'tahun_ajaran' => '2023/2024',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        ModulAjar::insert($modulAjars);
    }
}
