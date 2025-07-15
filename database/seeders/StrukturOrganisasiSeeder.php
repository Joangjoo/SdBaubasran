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
                'kelas_mengajar' => null,
                'mapel_mengajar' => null,
                'foto' => 'struktur-organisasi/foto1.png',
                'periode_jabatan' => '2025-2027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Siti Fatimah',
                'jabatan' => 'Kepala Tata Usaha',
                'kelas_mengajar' => '1',
                'mapel_mengajar' => 'Wali Kelas',
                'foto' => 'struktur-organisasi/foto2.png',
                'periode_jabatan' => '2025-2027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Panuti Lestari, S.Pd',
                'jabatan' => 'Bendahara',
                'kelas_mengajar' => '2',
                'mapel_mengajar' => 'Wali Kelas',
                'foto' => 'struktur-organisasi/foto3.png',
                'periode_jabatan' => '2025-2027',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Yudi Hartono, S.Pd',
                'jabatan' => 'Kurikulum',
                'kelas_mengajar' => '2',
                'mapel_mengajar' => 'Wali Kelas',
                'foto' => 'struktur-organisasi/foto4.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Hasan Basri, S.S',
                'jabatan' => 'Ismuba',
                'kelas_mengajar' => '4, 5, 6',
                'mapel_mengajar' => 'PJOK',
                'foto' => 'struktur-organisasi/foto5.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Endah Nur Sasmita,SPd',
                'jabatan' => 'Sarpras',
                'kelas_mengajar' => '2, 3, 1',
                'mapel_mengajar' => 'PAI',
                'foto' => 'struktur-organisasi/foto6.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Rahma Faizah, S.Pd',
                'jabatan' => 'BUMS',
                'kelas_mengajar' => '1, 2, 3',
                'mapel_mengajar' => 'IPAS',
                'foto' => 'struktur-organisasi/foto7.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Khoiri Nur Cahyo,S.Pd',
                'jabatan' => 'Humas',
                'kelas_mengajar' => '3, 4, 5',
                'mapel_mengajar' => 'BAHASA INGGRIS',
                'foto' => 'struktur-organisasi/foto8.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Chandra Setyasaputri, S.Pd',
                'jabatan' => 'Pengajaran',
                'kelas_mengajar' => '5, 6',
                'mapel_mengajar' => 'BAHASA ARAB',
                'foto' => 'struktur-organisasi/foto9.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Saroyo, S.Pd',
                'jabatan' => 'Ibadah',
                'kelas_mengajar' => '6',
                'mapel_mengajar' => 'BAHASA JAWA',
                'foto' => 'struktur-organisasi/foto10.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Purwanto',
                'jabatan' => 'Maintenance',
                'kelas_mengajar' => null,
                'mapel_mengajar' => null,
                'foto' => 'struktur-organisasi/foto11.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Yuli Afanti, S.Pd.I',
                'jabatan' => 'Koperasi',
                'kelas_mengajar' => '1, 2, 3',
                'mapel_mengajar' => 'PAI',
                'foto' => 'struktur-organisasi/foto12.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Fitri Arum Khikmawati, S.Pd',
                'jabatan' => 'Kesiswaan',
                'kelas_mengajar' => '2, 3',
                'mapel_mengajar' => 'PAI',
                'foto' => 'struktur-organisasi/foto13.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Dian Puspita, S.Pd.',
                'jabatan' => 'Koordinator Kurikulum',
                'kelas_mengajar' => '3',
                'mapel_mengajar' => 'PAI',
                'foto' => 'struktur-organisasi/placeholder-female.png',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_lengkap' => 'Ghassani Alifah, S.Pd',
                'jabatan' => 'Ekstrakulikuler',
                'kelas_mengajar' => '2, 3',
                'mapel_mengajar' => 'PAI',
                'foto' => 'struktur-organisasi/foto14.webp',
                'periode_jabatan' => '2024-2028',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        StrukturOrganisasi::insert($strukturs);
    }
}
