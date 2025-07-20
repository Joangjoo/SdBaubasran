<?php

namespace Database\Seeders;

use App\Models\Ppdb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PpdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ppdb::truncate();
        Ppdb::create([
            'judul' => 'Persiapan dan Pendaftaran Awal',
            'poin' => "Memenuhi Syarat Usia: Minimal 6 tahun per 1 Juli tahun pelajaran berlangsung
Membeli Formulir: Datang ke Bagian Keuangan SD Muhammadiyah Bausasran
Menitipkan Dokumen: Fotokopi Akta Kelahiran, KK, dan nomor telepon ke Tata Usaha (Senin-Jumat jam kerja)",
            'urutan' => 1,
            'warna' => 'blue',
        ]);
        Ppdb::create([
            'judul' => 'Pengisian dan Pengembalian Formulir',
            'poin' => "Mengambil Formulir: Di bagian keuangan setelah pembelian
Mengisi Formulir: Lengkapi biodata dan riwayat, siapkan dokumen pendukung (foto, akta lahir, KK, surat keterangan TK)
Mengembalikan Formulir: Kembalikan ke bagian administrasi dan dapatkan jadwal tes unjuk kreativitas",
            'urutan' => 2,
            'warna' => 'green',
        ]);
        Ppdb::create([
            'judul' => 'Tes dan Seleksi',
            'poin' => "Unjuk Kreativitas: Calon siswa mengikuti tes sesuai jadwal (November-Desember)
Wawancara: Untuk calon wali murid",
            'urutan' => 3,
            'warna' => 'yellow',
        ]);
        Ppdb::create([
            'judul' => 'Pengumuman dan Registrasi Ulang',
            'poin' => "Pengumuman: Tunggu hasil seleksi penerimaan siswa baru
Registrasi: Jika lulus, lakukan proses registrasi ulang untuk resmi menjadi siswa",
            'urutan' => 4,
            'warna' => 'red',
        ]);
    }
}
