<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{
    // Function to display list of prodis
    public function index()
    {
        $prodis = Prodi::all(); // Mengambil semua data prodi
        return view('prodi.daftarprodi', compact('prodis'));
    }
    

    // Function to display a single prodi based on ID
    public function show($kode_prodi)
    {
        $prodi = Prodi::where('kode_prodi', $kode_prodi)->firstOrFail();

        return view('prodi.detailprodi', compact('prodi'));
    }
}
