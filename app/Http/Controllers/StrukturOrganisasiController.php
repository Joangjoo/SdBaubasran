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
        $gambarHeader = Gambar::latest()->first();

        return view('tentangkami.struktur-organisasi', compact('strukturs','gambarHeader'));
    }
}
