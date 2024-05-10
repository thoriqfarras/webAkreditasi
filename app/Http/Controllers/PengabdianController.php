<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function index() {
        // $penelitian = Penelitian::all();
        $pengabdian = [
          [
            "Nama Dosen" => ["Kholiq Budiman", "Faris Al-Hakim"],
            "Nama Mahasiswa" => ["Nabil Mutawakkil Qisthi", "Novi Fitri Rahayu"],
            "Judul Penelitian" => "Pengabdian X",
            "Skema/Sumber Dana" => "Penyedia Jasa X",
            "Dana" => "Rp20.000.000",
            "Tahun" => 2024
          ],
          [
            "Nama Dosen" => ["Yahya Nur Ifriza", "Jumanto"],
            "Nama Mahasiswa" => ["Farhan Fahreza Ramadhan", "Teguh Kukuh Dwi Cahyo"],
            "Judul Penelitian" => "Pengabdian Y",
            "Skema/Sumber Dana" => "Penyedia Jasa Z",
            "Dana" => "Rp30.000.000",
            "Tahun" => 2022
          ],
          [
            "Nama Dosen" => ["Endang Sugiharti"],
            "Nama Mahasiswa" => ["Fathimah Az Zahra Sanjani"],
            "Judul Penelitian" => "Pengabdian Z",
            "Skema/Sumber Dana" => "Penyedia Jasa Z",
            "Dana" => "Rp33.000.000",
            "Tahun" => 2023
          ],
          [
            "Nama Dosen" => ["Alamsyah", "Anggyi Trisnawan Putra"],
            "Nama Mahasiswa" => ["Almaas Izdihar Sant", "Karindra Rafi Linux Hirarki"],
            "Judul Penelitian" => "Pengabdian A",
            "Skema/Sumber Dana" => "Penyedia Jasa A",
            "Dana" => "Rp15.000.000",
            "Tahun" => 2021
          ],
          [
            "Nama Dosen" => ["Budi Prasetiyo", "Abas Setiawan"],
            "Nama Mahasiswa" => ["Muhammad Haikal", "Yopi Julia Nurriski"],
            "Judul Penelitian" => "Pengabdian B",
            "Skema/Sumber Dana" => "Penyedia Jasa B",
            "Dana" => "Rp10.000.000",
            "Tahun" => 2024
          ],
        ];
        
        return view('pengabdian', [
          'title' => 'Pengabdian',
          'tableName' => 'Tabel Pengabdian',
          'titleTableRekap' => 'Tabel Rekap Pengabdian',
          'currentYear' => 2024,
          "mainData" => $pengabdian
        ]);
      }
}
