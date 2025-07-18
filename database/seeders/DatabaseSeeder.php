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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

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
        ]);
    }
}
