<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            ModulAjarSeeder::class,
            ProgramSemesterSeeder::class,
            ProposalSeeder::class,
            LpjSeeder::class,
            TugasMuridSeeder::class,
            StrukturOrganisasiSeeder::class,
            FasilitasSeeder::class,
            VideoSeeder::class,
            ProfilSekolahSeeder::class,
            PpdbSeeder::class,
        ]);
    }
}
