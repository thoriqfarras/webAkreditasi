<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_prodi', 'kode_prodi']; // sesuaikan dengan kolom yang ada di tabel prodi
}
