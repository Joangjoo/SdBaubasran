<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Gambar;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::orderBy('tanggal', 'desc')->limit(5)->get();
        $beritaCount = $berita->count();
        $slider = Gambar::latest()->take(5)->get();
        return view('informasi.berita', compact('berita', 'beritaCount','slider'));
    }
}
