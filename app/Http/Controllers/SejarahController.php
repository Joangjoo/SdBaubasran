<?php

namespace App\Http\Controllers;

use App\Models\Linimasa;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $sambutan = Sambutan::first();
        $linimasa = Linimasa::all();
        return view('tentangkami.sejarah', compact('sambutan','linimasa'));
    }
}
