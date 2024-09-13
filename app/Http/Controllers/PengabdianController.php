<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengabdianController extends Controller
{
    public function index() {
        // $penelitian =::all();
        $pengabdian = [
          [
            "Nama Dosen" => ["Kholiq Budiman", "Faris Al-Hakim"],
            "Nama Mahasiswa" => ["Nabil Mutawakkil Qisthi", "Novi Fitri Rahayu"],
            "Prodi" => "Teknik Informatika",
            "Judul" => "Pengabdian X",
            "Skema/Sumber Dana" => "Penyedia Jasa X",
            "Dana" => "Rp20.000.000",
            "Tahun" => 2024
          ],
          [
            "Nama Dosen" => ["Yahya Nur Ifriza", "Jumanto"],
            "Nama Mahasiswa" => ["Farhan Fahreza Ramadhan", "Teguh Kukuh Dwi Cahyo"],
            "Prodi" => "Teknik Informatika",
            "Judul" => "Pengabdian Y",
            "Skema/Sumber Dana" => "Penyedia Jasa Z",
            "Dana" => "Rp30.000.000",
            "Tahun" => 2022
          ],
          [
            "Nama Dosen" => ["Endang Sugiharti"],
            "Nama Mahasiswa" => ["Fathimah Az Zahra Sanjani"],
            "Prodi" => "Teknik Informatika",
            "Judul" => "Pengabdian Z",
            "Skema/Sumber Dana" => "Penyedia Jasa Z",
            "Dana" => "Rp33.000.000",
            "Tahun" => 2023
          ],
          [
            "Nama Dosen" => ["Alamsyah", "Anggyi Trisnawan Putra"],
            "Nama Mahasiswa" => ["Almaas Izdihar Sant", "Karindra Rafi Linux Hirarki"],
            "Prodi" => "Teknik Informatika",
            "Judul" => "Pengabdian A",
            "Skema/Sumber Dana" => "Penyedia Jasa A",
            "Dana" => "Rp15.000.000",
            "Tahun" => 2021
          ],
          [
            "Nama Dosen" => ["Budi Prasetiyo", "Abas Setiawan"],
            "Nama Mahasiswa" => ["Muhammad Haikal", "Yopi Julia Nurriski"],
            "Prodi" => "Teknik Informatika",
            "Judul" => "Pengabdian B",
            "Skema/Sumber Dana" => "Penyedia Jasa B",
            "Dana" => "Rp10.000.000",
            "Tahun" => 2024
          ],
        ];
        
        return view('pengabdian', [
          'title' => 'Pengabdian',
          'tableName' => 'Tabel Pengabdian',
          'titleTableRekap' => 'Tabel Rekap Pengabdian',
          'titleTableJumlah' => 'Tabel Jumlah Rekap Pengabdian',
          "mainData" => $pengabdian
        ]);
      }
}
