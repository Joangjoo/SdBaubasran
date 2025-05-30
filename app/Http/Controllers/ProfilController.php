<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

     public function index()
    {
         $berita = Berita::orderBy('tanggal', 'desc')->limit(5)->get();
        return view('tentangkami.profile', compact('berita')); 
    }

    public function visiMisi()
    {
        $berita = Berita::orderBy('tanggal', 'desc')->limit(5)->get();
        return view('tentangkami.visimisi', compact('berita'));
    }
}
