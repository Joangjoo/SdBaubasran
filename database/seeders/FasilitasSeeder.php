<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fasilitas::truncate();

        $fasilitas = [
            [
                'nama' => 'Perpustakaan',
                'deskripsi' => 'Koleksi buku lengkap untuk menunjang literasi dan pengetahuan siswa.',
                'gambar' => 'fasilitas/fs1.png',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nama' => 'Laboratorium Komputer',
                'deskripsi' => 'Dilengkapi perangkat modern untuk pembelajaran teknologi informasi dan komunikasi.',
                'gambar' => 'fasilitas/fs2.png',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nama' => 'Ruang UKS',
                'deskripsi' => 'Memberikan pelayanan kesehatan pertama bagi siswa yang membutuhkan.',
                'gambar' => 'fasilitas/fs3.png',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nama' => 'Lapangan Olahraga',
                'deskripsi' => 'Area luas untuk berbagai kegiatan olahraga seperti basket, voli, dan upacara.',
                'gambar' => 'fasilitas/fs4.png',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nama' => 'Kantin Sehat',
                'deskripsi' => 'Menyediakan makanan dan minuman yang bersih, sehat, dan bergizi.',
                'gambar' => 'fasilitas/fs5.png',
                'created_at' => now(), 'updated_at' => now()
            ],
            [
                'nama' => 'Mushola',
                'deskripsi' => 'Tempat yang nyaman untuk melaksanakan ibadah dan kegiatan keagamaan.',
                'gambar' => 'fasilitas/fs6.png',
                'created_at' => now(), 'updated_at' => now()
            ],
        ];

        Fasilitas::insert($fasilitas);
    }
}
