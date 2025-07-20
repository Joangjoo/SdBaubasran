<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GtkController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VisiMisiController;

// --- HOME ---
Route::get('/', [HomeController::class,'home'])->name('home');

// --- TENTANG KAMI ---
Route::get('/tentangkami', [ProfilController::class, 'index'])->name('tentangkami.index');
Route::get('/tentangkami/visimisi', [VisiMisiController::class, 'index'])->name('tentangkami.visiMisi');
Route::get('/tentangkami/sejarah', [SejarahController::class, 'index'])->name('tentangkami.sejarah');
Route::get('/tentangkami/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur.organisasi');
Route::get('/tentangkami/gtk', [GtkController::class, 'index'])->name('struktur.gtk');
Route::get('/tentangkami/fasilitas',[FasilitasController::class, 'index'])->name('tentangkami.fasilitas');
Route::get('/tentangkami/ekstra',[EkstraController::class,'index'])->name('tentangkami.ekstra');


// --- DOKUMENTASI ---
Route::get('/dokumentasi/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/dokumentasi/videos', [VideoController::class, 'index'])->name('videos.index');

// --- INFORMASI ---
Route::get('/informasi/berita', [BeritaController::class, 'index'])->name('informasi.berita');
Route::get('/informasi/kelas', [KelasController::class, 'index'])->name('kelas.index');

// --- PPDB ---
Route::get('/ppdb/alur-pendaftaran', [PpdbController::class, 'index'])->name('ppdb.ppdb');

