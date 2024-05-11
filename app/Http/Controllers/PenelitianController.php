<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penelitian;

class PenelitianController extends Controller
{
    public function index() {
      // $penelitian = Penelitian::all();
      $penelitian = [
        [
          "Nama Dosen" => ["Kholiq Budiman", "Faris Al-Hakim"],
          "Nama Mahasiswa" => ["Nabil Mutawakkil Qisthi", "Novi Fitri Rahayu"],
          "Judul" => "Penelitian X",
          "Skema/Sumber Dana" => "Penyedia Jasa X",
          "Dana" => "Rp20.000.000",
          "Tahun" => 2024
        ],
        [
          "Nama Dosen" => ["Yahya Nur Ifriza", "Jumanto"],
          "Nama Mahasiswa" => ["Farhan Fahreza Ramadhan", "Teguh Kukuh Dwi Cahyo"],
          "Judul" => "Penelitian Y",
          "Skema/Sumber Dana" => "Penyedia Jasa Z",
          "Dana" => "Rp30.000.000",
          "Tahun" => 2022
        ],
        [
          "Nama Dosen" => ["Endang Sugiharti"],
          "Nama Mahasiswa" => ["Fathimah Az Zahra Sanjani"],
          "Judul" => "Penelitian Z",
          "Skema/Sumber Dana" => "Penyedia Jasa Z",
          "Dana" => "Rp33.000.000",
          "Tahun" => 2023
        ],
        [
          "Nama Dosen" => ["Alamsyah", "Anggyi Trisnawan Putra"],
          "Nama Mahasiswa" => ["Almaas Izdihar Sant", "Karindra Rafi Linux Hirarki"],
          "Judul" => "Penelitian A",
          "Skema/Sumber Dana" => "Penyedia Jasa A",
          "Dana" => "Rp15.000.000",
          "Tahun" => 2021
        ],
        [
          "Nama Dosen" => ["Budi Prasetiyo", "Abas Setiawan"],
          "Nama Mahasiswa" => ["Muhammad Haikal", "Yopi Julia Nurriski"],
          "Judul" => "Penelitian B",
          "Skema/Sumber Dana" => "Penyedia Jasa B",
          "Dana" => "Rp10.000.000",
          "Tahun" => 2024
        ],
      ];

      // - kolom: no, nama dosen, nama mahasiswa, judul, skema/sumber dana, dana, tahun, download laporan
      return view('penelitian', [
        'title' => 'Penelitian',
        'tableName' => 'Tabel Penelitian',
        'titleTableRekap' => 'Tabel Rekap Penelitian',
        'titleTableJumlah' => 'Tabel Jumlah Rekap Penelitian',
        'mainData' => $penelitian,
      ]);
    }
}
