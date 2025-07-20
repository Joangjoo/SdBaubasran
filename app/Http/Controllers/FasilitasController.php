<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Gambar;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index(){
        $fasilitas = Fasilitas::all();
        $gambarHeader = Gambar::latest()->first();
        return view('tentangkami.fasilitas',compact('fasilitas','gambarHeader'));
    }
}
