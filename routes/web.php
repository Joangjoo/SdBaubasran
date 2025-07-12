<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GtkController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VisiMisiController;

// --- HOME ---
Route::get('/', [HomeController::class,'home'])->name('home');

// --- TENTANG KAMI ---
Route::get('/tentangkami', [ProfilController::class, 'index'])->name('tentangkami.index');
Route::get('/tentangkami/visimisi', [VisiMisiController::class, 'index'])->name('tentangkami.visiMisi');
Route::get('/tentangkami/sejarah', [SejarahController::class, 'index'])->name('tentangkami.sejarah');
Route::get('/tentangkami/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur.organisasi');
Route::get('/tentangkami/gtk', [GtkController::class, 'index'])->name('struktur.gtk');


// --- DOKUMENTASI ---
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

// --- BERITA ---
Route::get('/informasi/berita', [BeritaController::class, 'index'])->name('informasi.berita');

