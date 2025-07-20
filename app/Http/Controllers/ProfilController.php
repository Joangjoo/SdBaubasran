<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Gambar;
use App\Models\ProfilSekolah;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

    public function index()
    {
        $berita = Berita::orderBy('tanggal', 'desc')->limit(5)->get();
        $gambarHeader = Gambar::latest()->first(); 
        $profilDetails = ProfilSekolah::orderBy('urutan', 'asc')->get();
        $sambutan = Sambutan::first();
        return view('tentangkami.profile', compact('berita','gambarHeader','profilDetails','sambutan'));
    }

    public function visiMisi()
    {
        $berita = Berita::orderBy('tanggal', 'desc')->limit(5)->get();
        return view('tentangkami.visimisi', compact('berita'));
    }
}
