<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::truncate();

        $videos = [
            [
                'judul' => 'Profil Sekolah SD Baubasran',
                'deskripsi' => 'Video perkenalan singkat mengenai fasilitas dan kegiatan di sekolah kami.',
                'url_youtube' => 'https://youtu.be/LL6BOqmCBbU?si=Ug_jbaOSCV04oOKT',
            ],
            [
                'judul' => 'Pentas Seni Tahunan',
                'deskripsi' => 'Saksikan kemeriahan acara pentas seni yang menampilkan bakat siswa-siswi.',
                'url_youtube' => 'https://www.youtube.com/live/-xUSf7PXFxk?si=aqEIMgjNvkodR40a',
            ],
            [
                'judul' => 'Kegiatan Pramuka',
                'deskripsi' => 'Dokumentasi kegiatan perkemahan dan latihan rutin Pramuka Siaga.',
                'url_youtube' => 'https://youtu.be/v3cvM0X58Io?si=MwXypDdfe3bXPPsg',
            ],
        ];

        foreach ($videos as $videoData) {
            Video::create($videoData);
        }
    }
}
