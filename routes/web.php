<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;

Route::get('/', [BeritaController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index']);
