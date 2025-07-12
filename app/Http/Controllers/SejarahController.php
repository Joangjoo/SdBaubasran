<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Linimasa;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $sambutan = Sambutan::first();
        $linimasa = Linimasa::all();
        $slider = Gambar::latest()->take(1)->get();
        return view('tentangkami.sejarah', compact('sambutan','linimasa', 'slider'));
    }
}
