<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tables = ['capaian_pembelajaran', 'rpp', 'modul_ajar', 'latihan_soal', 'soal_kenaikan_kelas'];
        foreach ($tables as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->string('nama_file_asli')->nullable()->after('file_path');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('administration_tables', function (Blueprint $table) {
            //
        });
    }
};
