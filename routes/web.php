<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/profil', [ProfilController::class, 'index'])->name('profile.index');
Route::get('/profil/visimisi', [ProfilController::class, 'visiMisi'])->name('profile.visiMisi');
Route::get('/', [HomeController::class,'home'])->name('home');