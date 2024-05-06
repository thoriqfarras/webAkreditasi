<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penelitian;

class PenelitianController extends Controller
{
    public function index() {
      // $penelitian = Penelitian::all();
      return view('penelitian', [
        'title' => 'Penelitian',
        'penelitian' => 'penelitian',
        'titleTableRekap' => 'Tabel Rekap Penelitian',
        'currentYear' => 2024
      ]);
    }


}
