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
            "Judul" => "Pengabdian X",
            "Skema/Sumber Dana" => "Penyedia Jasa X",
            "Dana" => "Rp20.000.000",
            "Tahun" => 2024
          ],
          [
            "Nama Dosen" => ["Yahya Nur Ifriza", "Jumanto"],
            "Nama Mahasiswa" => ["Farhan Fahreza Ramadhan", "Teguh Kukuh Dwi Cahyo"],
            "Judul" => "Pengabdian Y",
            "Skema/Sumber Dana" => "Penyedia Jasa Z",
            "Dana" => "Rp30.000.000",
            "Tahun" => 2022
          ],
          [
            "Nama Dosen" => ["Endang Sugiharti"],
            "Nama Mahasiswa" => ["Fathimah Az Zahra Sanjani"],
            "Judul" => "Pengabdian Z",
            "Skema/Sumber Dana" => "Penyedia Jasa Z",
            "Dana" => "Rp33.000.000",
            "Tahun" => 2023
          ],
          [
            "Nama Dosen" => ["Alamsyah", "Anggyi Trisnawan Putra"],
            "Nama Mahasiswa" => ["Almaas Izdihar Sant", "Karindra Rafi Linux Hirarki"],
            "Judul" => "Pengabdian A",
            "Skema/Sumber Dana" => "Penyedia Jasa A",
            "Dana" => "Rp15.000.000",
            "Tahun" => 2021
          ],
          [
            "Nama Dosen" => ["Budi Prasetiyo", "Abas Setiawan"],
            "Nama Mahasiswa" => ["Muhammad Haikal", "Yopi Julia Nurriski"],
            "Judul" => "Pengabdian B",
            "Skema/Sumber Dana" => "Penyedia Jasa B",
            "Dana" => "Rp10.000.000",
            "Tahun" => 2024
          ],
        ];
        
      $tahun = [2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024];
      $prodi = ["Teknik Informatika", "Sistem Informasi"];
      $dosen = ["Kholiq Budiman", "Faris Al-Hakim","Yahya Nur Ifriza", "Jumanto","Endang Sugiharti","Alamsyah", "Anggyi Trisnawan Putra","Budi Prasetiyo", "Abas Setiawan"];
        
        return view('pengabdian', [
          'title' => 'Pengabdian',
          'tableName' => 'Tabel Pengabdian',
          'titleTableRekap' => 'Tabel Rekap Pengabdian',
          'titleTableJumlah' => 'Tabel Jumlah Rekap Pengabdian',
          "mainData" => $pengabdian,
          'tahun' => $tahun,
          'prodi' => $prodi,
          'dosen' => $dosen
        ]);
      }
}
