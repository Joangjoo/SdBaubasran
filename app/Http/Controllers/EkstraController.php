<?php

namespace App\Http\Controllers;

use App\Models\Ekstra;
use App\Models\Gambar;
use Illuminate\Http\Request;

class EkstraController extends Controller
{
    public function index(){
        $ekstra = Ekstra::all();
        $slider = Gambar::latest()->take(5)->get();
        return view('tentangkami.ekstrakulikuler',compact('ekstra','slider'));
    }
}
