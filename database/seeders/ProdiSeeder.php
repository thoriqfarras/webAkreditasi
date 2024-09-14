<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
        ['kode_prodi' => 1, 'nama_prodi' => 'D3 Statistika Terapan dan Komputasi'],
        ['kode_prodi' => 2, 'nama_prodi' => 'S1 Pendidikan Ilmu Pengetahuan Alam'],
        ['kode_prodi' => 3, 'nama_prodi' => 'S1 Pendidikan Matematika'],
        ['kode_prodi' => 4, 'nama_prodi' => 'S1 Matematika'],
        ['kode_prodi' => 5, 'nama_prodi' => 'S1 Teknik Informatika'],
        ['kode_prodi' => 6, 'nama_prodi' => 'S1 Sistem Informasi'],
        ['kode_prodi' => 7, 'nama_prodi' => 'S1 Pendidikan Fisika'],
        ['kode_prodi' => 8, 'nama_prodi' => 'S1 Fisika'],
        ['kode_prodi' => 9, 'nama_prodi' => 'S1 Pendidikan Kimia'],
        ['kode_prodi' => 10, 'nama_prodi' => 'S1 Kimia'],
        ['kode_prodi' => 11, 'nama_prodi' => 'S1 Pendidikan Biologi'],
        ['kode_prodi' => 12, 'nama_prodi' => 'S1 Biologi'],
        ['kode_prodi' => 13, 'nama_prodi' => 'S1 Ilmu Lingkungan'],
        ['kode_prodi' => 14, 'nama_prodi' => 'S1 Statistika dan Sains Data'],
        ['kode_prodi' => 15, 'nama_prodi' => 'S2 Pendidikan Ilmu Pengetahuan Alam'],
        ['kode_prodi' => 16, 'nama_prodi' => 'S2 Pendidikan Matematika'],
        ['kode_prodi' => 17, 'nama_prodi' => 'S2 Fisika'],
        ['kode_prodi' => 18, 'nama_prodi' => 'S2 Biologi'],
        ['kode_prodi' => 19, 'nama_prodi' => 'S2 Pendidikan Kimia'],
        ['kode_prodi' => 20, 'nama_prodi' => 'S3 Pendidikan Ilmu Pengetahuan Alam'],
        ['kode_prodi' => 21, 'nama_prodi' => 'S3 Pendidikan Matematika'],
    ];
    foreach ($prodis as $prodi) {
        Prodi::create($prodi);
    }
    }
}
