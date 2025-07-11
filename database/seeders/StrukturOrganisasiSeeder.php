<?php

namespace Database\Seeders;

use App\Models\StrukturOrganisasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrukturOrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StrukturOrganisasi::truncate();
        $strukturs = [
            [
                'nama_lengkap' => 'Supartini, S.Pd.SD.',
                'jabatan' => 'Kepala Sekolah',
                'foto' => 'struktur-organisasi/foto1.png',
                'periode_jabatan' => '2025-2027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Siti Fatimah',
                'jabatan' => 'Kepala Tata Usaha',
                'foto' => 'struktur-organisasi/foto2.png',
                'periode_jabatan' => '2025-2027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Panuti Lestari, S.Pd',
                'jabatan' => 'Bendahara',
                'foto' => 'struktur-organisasi/foto3.png',
                'periode_jabatan' => '2025-2027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Yudi Hartono, S.Pd',
                'jabatan' => 'Kurikulum',
                'foto' => 'struktur-organisasi/foto4.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Hasan Basri, S.S',
                'jabatan' => 'Ismuba',
                'foto' => 'struktur-organisasi/foto5.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Endah Nur Sasmita,SPd',
                'jabatan' => 'Sarpras',
                'foto' => 'struktur-organisasi/foto6.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Rahma Faizah, S.Pd',
                'jabatan' => 'BUMS',
                'foto' => 'struktur-organisasi/foto7.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Khoiri Nur Cahyo,S.Pd',
                'jabatan' => 'Humas',
                'foto' => 'struktur-organisasi/foto8.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Chandra Setyasaputri, S.Pd',
                'jabatan' => 'Pengajaran',
                'foto' => 'struktur-organisasi/foto9.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Saroyo, S.Pd',
                'jabatan' => 'Ibadah',
                'foto' => 'struktur-organisasi/foto10.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Purwanto',
                'jabatan' => 'Maintenance',
                'foto' => 'struktur-organisasi/foto11.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Yuli Afanti, S.Pd.I',
                'jabatan' => 'Koperasi',
                'foto' => 'struktur-organisasi/foto12.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Fitri Arum Khikmawati, S.Pd',
                'jabatan' => 'Kesiswaan',
                'foto' => 'struktur-organisasi/foto13.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Dian Puspita, S.Pd.',
                'jabatan' => 'Koordinator Kurikulum',
                'foto' => 'struktur-organisasi/placeholder-female.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Ghassani Alifah, S.Pd',
                'jabatan' => 'Ekstrakulikuler',
                'foto' => 'struktur-organisasi/foto14.webp',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        StrukturOrganisasi::insert($strukturs);
    }
}
