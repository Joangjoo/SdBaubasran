<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();
        $gambarHeader = Gambar::latest()->first();
        return view('galeri.videos', compact('videos','gambarHeader'));
    }
}
