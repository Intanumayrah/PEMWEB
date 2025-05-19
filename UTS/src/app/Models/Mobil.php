<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    // Nama tabel, kalau nama tabel standar "mobils" bisa dihilangkan
    protected $table = 'mobils';

    // Kolom yang boleh diisi massal (mass assignment)
    protected $fillable = [
        'nama',
        'tahun',
        'harga',
        'warna',
        'mesin',
        'transmisi',
        'kapasitas_penumpang',
        'fitur_keamanan',
        'deskripsi',
    ];
}
