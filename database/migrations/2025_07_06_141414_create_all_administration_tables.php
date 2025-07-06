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
            $table->text('deskripsi')->nullable();
            $table->string('file_path');
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->string('tahun_ajaran', 50);
            $table->string('nama_pengunggah');
            $table->timestamps();
        });

        Schema::create('rpp', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('file_path');
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->enum('semester', ['ganjil', 'genap']);
            $table->string('tahun_ajaran', 50);
            $table->string('nama_pengunggah');
            $table->timestamps();
        });

        Schema::create('modul_ajar', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('file_path');
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->enum('semester', ['ganjil', 'genap']);
            $table->string('tahun_ajaran', 50);
            $table->string('nama_pengunggah');
            $table->timestamps();
        });

        Schema::create('latihan_soal', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('file_path');
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->enum('semester', ['ganjil', 'genap']);
            $table->string('tahun_ajaran', 50);
            $table->string('nama_pengunggah');
            $table->timestamps();
        });

        Schema::create('soal_kenaikan_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->string('file_path');
            $table->string('mata_pelajaran', 100);
            $table->string('tingkat_kelas', 50);
            $table->string('tahun_ajaran', 50);
            $table->string('nama_pengunggah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_administration_tables');
    }
};
