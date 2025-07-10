<?php

namespace Database\Seeders;

use App\Models\Lpj;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LpjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lpj::truncate();
        $lpjs = [
            [
                'file_path' => 'lpj/lpj1.pdf',
                'nama_file_asli' => 'lpj1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'file_path' => 'lpj/lpj2.pdf',
                'nama_file_asli' => 'lpj2.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Lpj::insert($lpjs);
    }
}
