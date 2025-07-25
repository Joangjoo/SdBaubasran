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
        $gambarHeader = Gambar::latest()->first();
        return view('informasi.berita', compact('berita', 'beritaCount','gambarHeader'));
    }
}
