<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class ProdiController extends Controller
{

    private $penelitians = [
        [
            "Nama Dosen" => ["Kholiq Budiman", "Faris Al-Hakim"],
            "Nama Mahasiswa" => ["Nabil Mutawakkil Qisthi", "Novi Fitri Rahayu"],
            "Prodi" => "D3 Statistika Terapan dan Komputasi",
            "Judul" => "Analisis Algoritma X",
            "Skema/Sumber Dana" => "Penyedia Jasa X",
            "Dana" => "Rp25.000.000",
            "Tahun" => 2024
        ],
        [
            "Nama Dosen" => ["Yahya Nur Ifriza", "Jumanto"],
            "Nama Mahasiswa" => ["Farhan Fahreza Ramadhan", "Teguh Kukuh Dwi Cahyo"],
            "Prodi" => "S1 Pendidikan Ilmu Pengetahuan Alam",
            "Judul" => "Pengembangan Aplikasi Y",
            "Skema/Sumber Dana" => "Penyedia Jasa Z",
            "Dana" => "Rp28.000.000",
            "Tahun" => 2022
        ],
        [
            "Nama Dosen" => ["Endang Sugiharti"],
            "Nama Mahasiswa" => ["Fathimah Az Zahra Sanjani"],
            "Prodi" => "S1 Pendidikan Matematika",
            "Judul" => "Studi Kasus Z",
            "Skema/Sumber Dana" => "Penyedia Jasa Z",
            "Dana" => "Rp35.000.000",
            "Tahun" => 2023
        ],
        [
            "Nama Dosen" => ["Alamsyah", "Anggyi Trisnawan Putra"],
            "Nama Mahasiswa" => ["Almaas Izdihar Sant", "Karindra Rafi Linux Hirarki"],
            "Prodi" => "S1 Pendidikan Matematika",
            "Judul" => "Implementasi Teknologi A",
            "Skema/Sumber Dana" => "Penyedia Jasa A",
            "Dana" => "Rp18.000.000",
            "Tahun" => 2021
        ],
        [
            "Nama Dosen" => ["Budi Prasetiyo", "Abas Setiawan"],
            "Nama Mahasiswa" => ["Muhammad Haikal", "Yopi Julia Nurriski"],
            "Prodi" => "D3 Statistika Terapan dan Komputasi",
            "Judul" => "Penelitian B",
            "Skema/Sumber Dana" => "Penyedia Jasa B",
            "Dana" => "Rp12.000.000",
            "Tahun" => 2024
        ],
        [
            "Nama Dosen" => ["Arief Pratama", "Siti Maulida"],
            "Nama Mahasiswa" => ["Andi Saputra", "Rina Melati"],
            "Prodi" => "S1 Pendidikan Matematika",
            "Judul" => "Model Matematika X",
            "Skema/Sumber Dana" => "Penyedia Jasa C",
            "Dana" => "Rp20.000.000",
            "Tahun" => 2023
        ],
        [
            "Nama Dosen" => ["Rudi Hartono", "Dewi Sari"],
            "Nama Mahasiswa" => ["Budi Prabowo", "Sari Kusuma"],
            "Prodi" => "S1 Pendidikan Ilmu Pengetahuan Alam",
            "Judul" => "Eksperimen Fisika Y",
            "Skema/Sumber Dana" => "Penyedia Jasa D",
            "Dana" => "Rp22.000.000",
            "Tahun" => 2022
        ],
        [
            "Nama Dosen" => ["Dani Firmansyah", "Rini Widyaningrum"],
            "Nama Mahasiswa" => ["Ahmad Yusuf", "Diana Lestari"],
            "Prodi" => "D3 Statistika Terapan dan Komputasi",
            "Judul" => "Sintesis Senyawa Kimia Z",
            "Skema/Sumber Dana" => "Penyedia Jasa E",
            "Dana" => "Rp30.000.000",
            "Tahun" => 2024
        ],
        [
            "Nama Dosen" => ["Rina Dewi", "Eko Haryanto"],
            "Nama Mahasiswa" => ["Zulfiqar Rahman", "Lina Septiani"],
            "Prodi" => "S1 Pendidikan Ilmu Pengetahuan Alam",
            "Judul" => "Studi Ekologi A",
            "Skema/Sumber Dana" => "Penyedia Jasa F",
            "Dana" => "Rp15.000.000",
            "Tahun" => 2021
        ],
        [
            "Nama Dosen" => ["Farhan Nugroho", "Rita Anggraini"],
            "Nama Mahasiswa" => ["Indra Pratama", "Maya Sari"],
            "Prodi" => "S1 Pendidikan Matematika",
            "Judul" => "Analisis Data B",
            "Skema/Sumber Dana" => "Penyedia Jasa G",
            "Dana" => "Rp27.000.000",
            "Tahun" => 2024
        ],
        [
            "Nama Dosen" => ["Rizal Maulana", "Hilda Asmara"],
            "Nama Mahasiswa" => ["Joko Prabowo", "Lia Anggraini"],
            "Prodi" => "S1 Pendidikan Ilmu Pengetahuan Alam",
            "Judul" => "Teori Fisika C",
            "Skema/Sumber Dana" => "Penyedia Jasa H",
            "Dana" => "Rp17.000.000",
            "Tahun" => 2022
        ],
        [
            "Nama Dosen" => ["Vina Yuliana", "Bambang Setiawan"],
            "Nama Mahasiswa" => ["Hani Oktavia", "Tio Harjo"],
            "Prodi" => "D3 Statistika Terapan dan Komputasi",
            "Judul" => "Reaksi Kimia D",
            "Skema/Sumber Dana" => "Penyedia Jasa I",
            "Dana" => "Rp26.000.000",
            "Tahun" => 2023
        ],
        [
            "Nama Dosen" => ["Dodi Hermanto", "Sari Dewi"],
            "Nama Mahasiswa" => ["Nanda Putra", "Ira Melati"],
            "Prodi" => "S1 Pendidikan Ilmu Pengetahuan Alam",
            "Judul" => "Penelitian Biologi E",
            "Skema/Sumber Dana" => "Penyedia Jasa J",
            "Dana" => "Rp19.000.000",
            "Tahun" => 2021
        ],
        [
            "Nama Dosen" => ["Taufik Hidayat", "Lina Septiana"],
            "Nama Mahasisiwa" => ["Bintang Sari", "Sari Yulia"],
            "Prodi" => "D3 Statistika Terapan dan Komputasi",
            "Judul" => "Pengembangan Sistem A",
            "Skema/Sumber Dana" => "Penyedia Jasa K",
            "Dana" => "Rp23.000.000",
            "Tahun" => 2024
        ],
        [
            "Nama Dosen" => ["Sinta Pratama", "Mansur Ali"],
            "Nama Mahasiswa" => ["Budi Santoso", "Rina Oktavia"],
            "Prodi" => "S1 Pendidikan Matematika",
            "Judul" => "Studi Keamanan Jaringan B",
            "Skema/Sumber Dana" => "Penyedia Jasa L",
            "Dana" => "Rp32.000.000",
            "Tahun" => 2022
        ],
        [
            "Nama Dosen" => ["Kiki Andriani", "Miftahul Huda"],
            "Nama Mahasiswa" => ["Faris Alamsyah", "Nina Anggraini"],
            "Prodi" => "D3 Statistika Terapan dan Komputasi",
            "Judul" => "Optimasi Sistem C",
            "Skema/Sumber Dana" => "Penyedia Jasa M",
            "Dana" => "Rp29.000.000",
            "Tahun" => 2023
        ],
        [
            "Nama Dosen" => ["Arif Budiman", "Nina Sari"],
            "Nama Mahasiswa" => ["Yogi Prabowo", "Lia Rosita"],
            "Prodi" => "S1 Pendidikan Ilmu Pengetahuan Alam",
            "Judul" => "Algoritma Pencarian D",
            "Skema/Sumber Dana" => "Penyedia Jasa N",
            "Dana" => "Rp21.000.000",
            "Tahun" => 2021
        ],
        [
            "Nama Dosen" => ["Nadia Zahra", "Iwan Setiawan"],
            "Nama Mahasiswa" => ["Aditya Pratama", "Dina Farida"],
            "Prodi" => "S1 Pendidikan Matematika",
            "Judul" => "Pemodelan Data E",
            "Skema/Sumber Dana" => "Penyedia Jasa O",
            "Dana" => "Rp33.000.000",
            "Tahun" => 2024
        ]
    ];
    

    private $prodis = [
        ['kode_prodi' => 1, 'Prodi' => 'D3 Statistika Terapan dan Komputasi'],
        ['kode_prodi' => 2, 'Prodi' => 'S1 Pendidikan Ilmu Pengetahuan Alam'],
        ['kode_prodi' => 3, 'Prodi' => 'S1 Pendidikan Matematika'],
        ['kode_prodi' => 4, 'Prodi' => 'S1 Matematika'],
        ['kode_prodi' => 5, 'Prodi' => 'S1 Teknik Informatika'],
        ['kode_prodi' => 6, 'Prodi' => 'S1 Sistem Informasi'],
        ['kode_prodi' => 7, 'Prodi' => 'S1 Pendidikan Fisika'],
        ['kode_prodi' => 8, 'Prodi' => 'S1 Fisika'],
        ['kode_prodi' => 9, 'Prodi' => 'S1 Pendidikan Kimia'],
        ['kode_prodi' => 10, 'Prodi' => 'S1 Kimia'],
        ['kode_prodi' => 11, 'Prodi' => 'S1 Pendidikan Biologi'],
        ['kode_prodi' => 12, 'Prodi' => 'S1 Biologi'],
        ['kode_prodi' => 13, 'Prodi' => 'S1 Ilmu Lingkungan'],
        ['kode_prodi' => 14, 'Prodi' => 'S1 Statistika dan Sains Data'],
        ['kode_prodi' => 15, 'Prodi' => 'S2 Pendidikan Ilmu Pengetahuan Alam'],
        ['kode_prodi' => 16, 'Prodi' => 'S2 Pendidikan Matematika'],
        ['kode_prodi' => 17, 'Prodi' => 'S2 Fisika'],
        ['kode_prodi' => 18, 'Prodi' => 'S2 Biologi'],
        ['kode_prodi' => 19, 'Prodi' => 'S2 Pendidikan Kimia'],
        ['kode_prodi' => 20, 'Prodi' => 'S3 Pendidikan Ilmu Pengetahuan Alam'],
        ['kode_prodi' => 21, 'Prodi' => 'S3 Pendidikan Matematika'],
    ];

    // Method untuk menampilkan daftar prodi
    public function index()
    {
        return view('prodi.daftarprodi', ['prodis' => $this->prodis]);
    }

    
    public function show($kode_prodi)
    {
        $prodi = collect($this->prodis)->firstWhere('kode_prodi', $kode_prodi);
    
        if ($prodi) {
            // Filter penelitian berdasarkan prodi yang dipilih
            $filteredPenelitian = array_filter($this->penelitians, function($item) use ($prodi) {
                return $item['Prodi'] === $prodi['Prodi'];
            });

            return view('prodi.detailprodi', [
                'prodi' => $prodi,
                'mainData' => array_values($filteredPenelitian), // Gunakan array_values untuk reset index
                'tableName' => 'Tabel Penelitian',
            ]);
    
        } else {
            return redirect()->route('prodi.daftarprodi')->with('error', 'Prodi tidak ditemukan');
        }
    }
    

   
}
