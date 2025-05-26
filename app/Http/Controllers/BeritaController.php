<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::orderBy('tanggal', 'desc')->limit(5)->get();
        return view('profile.profile', compact('berita'));
    }
}
