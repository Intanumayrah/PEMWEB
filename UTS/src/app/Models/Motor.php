<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motors';  // Nama tabel, kalau sudah sesuai konvensi Laravel bisa dihilangkan

    protected $fillable = [
        'nama',
        'tahun',
        'harga',
        'warna',
        'mesin',
        'transmisi',
        'kapasitas_mesin',
        'tipe_bahan_bakar',
        'fitur_keamanan',
        'deskripsi',
    ];

    protected $casts = [
        'fitur_keamanan' => 'array',
    ];
}