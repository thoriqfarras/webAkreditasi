<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penelitian;

class PenelitianController extends Controller
{
    public function index() {
      $penelitian = Penelitian::all();
      return view('penelitian', ['penelitian' => $penelitian]);
    }
}
