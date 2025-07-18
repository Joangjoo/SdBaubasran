<?php

namespace Database\Seeders;

use App\Models\ProfilSekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfilSekolah::truncate();

        $profilData = [
            ['label' => 'NSS', 'value' => '11226655', 'urutan' => 1],
            ['label' => 'NPSN', 'value' => '20403418', 'urutan' => 2],
            ['label' => 'Tanggal Berdiri', 'value' => '1 September 1977', 'urutan' => 3],
            ['label' => 'Izin Operasional', 'value' => '2877/1.1828/DIY-16/77', 'urutan' => 4],
            ['label' => 'Luas Tanah', 'value' => '14.000 m²', 'urutan' => 5],
            ['label' => 'Jumlah Guru & Staf', 'value' => '25', 'urutan' => 6],
            ['label' => 'Jumlah Siswa', 'value' => '70', 'urutan' => 7],
            ['label' => 'Jumlah Rombel', 'value' => '50', 'urutan' => 8],
        ];

        foreach ($profilData as $data) {
            ProfilSekolah::create($data);
        }
    }
}
