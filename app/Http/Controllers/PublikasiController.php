<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index() {
        // $penelitian = Penelitian::all();
        return view('penelitian', [
          'title' => 'Publikasi',
          'publikasi' => 'publikasi',
          'titleTableRekap' => 'Tabel Rekap Publikasi',
          'currentYear' => 2024
        ]);
      }
}
