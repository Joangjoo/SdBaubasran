<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ekstra;
use App\Models\Galeri;
use App\Models\Gambar;
use App\Models\Guru;
use App\Models\StrukturOrganisasi;
use App\Models\TentangKami;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $galeriTerbaru = Galeri::latest()->limit(6)->get();
        $beritaTerbaru = Berita::latest()->limit(3)->get();
        $testimoni = Testimoni::latest()->limit(3)->get();
        $ekstra = Ekstra::latest()->limit(4)->get();
        $info = TentangKami::first();
        $guru = StrukturOrganisasi::take(6)->get();
        $slider = Gambar::latest()->take(5)->get();

        return view('home.home', compact('galeriTerbaru', 'beritaTerbaru', 'testimoni','ekstra', 'info','guru','slider'));
    }
}
