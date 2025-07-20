<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Gambar;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        $galeri = Galeri::orderBy('judul')->paginate(6);
        $berita = Berita::orderBy('tanggal', 'desc')->limit(5)->get();
        $gambarHeader = Gambar::latest()->first();
        return view('galeri.galeri', compact('galeri', 'berita','gambarHeader'));
    }
}
