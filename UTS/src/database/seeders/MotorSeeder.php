<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Motor;  // Pastikan model Motor sudah dibuat dan namespace benar

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Motor::create([
            'nama' => 'Yamaha NMax',
            'tahun' => 2024,
            'harga' => 35000000,
            'warna' => 'Hitam',
            'mesin' => '155cc SOHC',
            'transmisi' => 'Otomatis',
            'kapasitas_mesin' => 155,
            'tipe_bahan_bakar' => 'Bensin',
            'fitur_keamanan' => ['ABS', 'CBS'],
            'deskripsi' => 'Yamaha NMax nyaman untuk perjalanan jarak jauh dan perkotaan.',
        ]);

        Motor::create([
            'nama' => 'Honda Beat',
            'tahun' => 2023,
            'harga' => 18000000,
            'warna' => 'Merah',
            'mesin' => '110cc SOHC',
            'transmisi' => 'Otomatis',
            'kapasitas_mesin' => 110,
            'tipe_bahan_bakar' => 'Bensin',
            'fitur_keamanan' => ['CBS'],
            'deskripsi' => 'Honda Beat hemat bahan bakar dan mudah dikendarai.',
        ]);
    }
}
