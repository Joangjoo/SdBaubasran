<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        $galeri = Galeri::orderBy('judul')->paginate(6);
        return view('galeri.galeri', compact('galeri'));
    }
}
