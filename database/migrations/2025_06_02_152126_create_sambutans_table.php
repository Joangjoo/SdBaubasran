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
        Schema::create('sambutans', function (Blueprint $table) {
            $table->id();
            $table->string('motivasi', 800)->nullable();
            $table->string('sambutan', 5000)->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('jabatan', 100)->nullable();
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sambutans');
    }
};
