<?php

namespace App\Http\Controllers;

use App\Models\Ekstra;
use App\Models\Gambar;
use Illuminate\Http\Request;

class EkstraController extends Controller
{
    public function index(){
        $ekstra = Ekstra::all();
        $gambarHeader = Gambar::latest()->first();
        return view('tentangkami.ekstrakulikuler',compact('ekstra','gambarHeader'));
    }
}
