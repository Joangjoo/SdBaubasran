<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;

class GtkController extends Controller
{
    public function index()
    {
        $gtk = StrukturOrganisasi::orderBy('id', 'asc')->get();
        $slider = Gambar::latest()->take(1)->get();

        return view('tentangkami.gtk', compact('gtk','slider'));
    }
}
