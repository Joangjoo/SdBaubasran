<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Misi;
use App\Models\Visi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visi = Visi::first();
        $misis = Misi::all();
        $slider = Gambar::latest()->take(1)->get();

        return view('tentangkami.visimisi', compact('visi', 'misis','slider'));
    }
}
