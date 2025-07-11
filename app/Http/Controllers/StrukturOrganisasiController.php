<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;
use App\Models\Gambar;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $strukturs = StrukturOrganisasi::orderBy('id', 'asc')->get();
        $slider = Gambar::latest()->take(1)->get();

        return view('tentangkami.struktur-organisasi', compact('strukturs','slider'));
    }
}
