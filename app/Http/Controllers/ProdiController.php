<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = [
            ['id' => 1, 'nama' => 'D3 Statistika Terapan dan Komputasi'],
            ['id' => 2, 'nama' => 'S1 Pendidikan Ilmu Pengetahuan Alam'],
            ['id' => 3, 'nama' => 'S1 Pendidikan Matematika'],
            ['id' => 4, 'nama' => 'S1 Matematika'],
            ['id' => 5, 'nama' => 'S1 Teknik Informatika'],
            ['id' => 6, 'nama' => 'S1 Sistem Informasi'],
            ['id' => 7, 'nama' => 'S1 Pendidikan Fisika'],
            ['id' => 8, 'nama' => 'S1 Fisika'],
            ['id' => 9, 'nama' => 'S1 Pendidikan Kimia'],
            ['id' => 10, 'nama' => 'S1 Kimia'],
            ['id' => 11, 'nama' => 'S1 Pendidikan Biologi'],
            ['id' => 12, 'nama' => 'S1 Biologi'],
            ['id' => 13, 'nama' => 'S1 Ilmu Lingkungan'],
            ['id' => 14, 'nama' => 'S1 Statistika dan Sains Data'],
            ['id' => 15, 'nama' => 'S2 Pendidikan Ilmu Pengetahuan Alam'],
            ['id' => 16, 'nama' => 'S2 Pendidikan Matematika'],
            ['id' => 17, 'nama' => 'S2 Fisika'],
            ['id' => 18, 'nama' => 'S2 Biologi'],
            ['id' => 19, 'nama' => 'S2 Pendidikan Kimia'],
            ['id' => 20, 'nama' => 'S3 Pendidikan Ilmu Pengetahuan Alam'],
            ['id' => 21, 'nama' => 'S3 Pendidikan Matematika'],
        ];

        return view('daftarprodi', compact('prodis'));
    }
}
