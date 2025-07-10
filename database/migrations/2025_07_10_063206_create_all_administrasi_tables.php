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
        Schema::create('capaian_pembelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('file_path');
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->string('tahun_ajaran', 50);
            $table->timestamps();
        });

        Schema::create('program_semester', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_ajaran', 50);
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->enum('semester', ['ganjil', 'genap']);
            $table->timestamps();
        });

        Schema::create('modul_ajar', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('file_path');
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->enum('semester', ['ganjil', 'genap']);
            $table->string('tahun_ajaran', 50);
            $table->timestamps();
        });

        Schema::create('bank_soal', function (Blueprint $table) {
            $table->id();
            $table->string('nama_soal');
            $table->string('file_path');
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->enum('semester', ['ganjil', 'genap']);
            $table->string('tahun_ajaran', 50);
            $table->timestamps();
        });

        Schema::create('tugas_murid', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tugas');
            $table->string('file_path');
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->string('tahun_ajaran', 50);
            $table->enum('semester', ['ganjil', 'genap']);
            $table->timestamps();
        });

        Schema::create('proposal', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->timestamps();
        });

        Schema::create('lpj', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_administrasi_tables');
    }
};
