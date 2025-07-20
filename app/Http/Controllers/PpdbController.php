<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        $alurPpdbs = Ppdb::orderBy('urutan', 'asc')->get();
        return view('ppdb.ppdb', compact('alurPpdbs'));
    }
}
