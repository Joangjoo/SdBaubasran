<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $selectedKelas = $request->query('kelas');
        $query = StrukturOrganisasi::whereNotNull('kelas_mengajar');
        $gambarHeader = Gambar::latest()->first();
        if ($selectedKelas) {
            $query->where('kelas_mengajar', 'like', '%' . $selectedKelas . '%');
        }
        $guru = $query->orderBy('jabatan')->get();

        return view('informasi.kelas', [
            'guru' => $guru,
            'selectedKelas' => $selectedKelas,
            'gambarHeader'=>$gambarHeader
        ]);
    }
}
