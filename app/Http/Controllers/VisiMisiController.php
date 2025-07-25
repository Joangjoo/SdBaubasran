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
        $gambarHeader = Gambar::latest()->first();

        return view('tentangkami.visimisi', compact('visi', 'misis','gambarHeader'));
    }
}
