<?php

namespace App\Http\Controllers;

use App\Models\Ekstra;
use Illuminate\Http\Request;

class EkstraController extends Controller
{
    public function index(){
        $ekstra = Ekstra::all();
        return view('tentangkami.ekstrakulikuler',compact('ekstra'));
    }
}
