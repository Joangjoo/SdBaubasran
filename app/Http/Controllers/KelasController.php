<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukturOrganisasi;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        // Ambil filter kelas dari request
        $selectedKelas = $request->query('kelas');

        // Query dasar untuk mengambil guru
        $query = StrukturOrganisasi::whereNotNull('kelas_mengajar');

        // Jika ada filter kelas yang dipilih, terapkan filter
        if ($selectedKelas) {
            $query->where('kelas_mengajar', 'like', '%' . $selectedKelas . '%');
        }

        // Ambil data guru yang sudah difilter
        $guru = $query->orderBy('jabatan')->get();

        return view('informasi.kelas', [
            'guru' => $guru,
            'selectedKelas' => $selectedKelas,
        ]);
    }
}
