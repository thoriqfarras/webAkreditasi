<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function index() {
        // $penelitian = Penelitian::all();
        return view('penelitian', [
          'title' => 'Pengabdian',
          'pengabdian' => 'pengabdian',
          'titleTableRekap' => 'Tabel Rekap Pengabdian',
          'currentYear' => 2024
        ]);
      }
}
