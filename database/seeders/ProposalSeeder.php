<?php

namespace Database\Seeders;

use App\Models\Proposal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proposal::truncate();
        $proposals = [
            [
                'file_path' => 'proposals/proposal2.pdf',
                'nama_file_asli' => 'proposal2.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'file_path' => 'proposals/proposal2.pdf',
                'nama_file_asli' => 'proposal2.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Proposal::insert($proposals);
    }
}
