<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mobil;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mobil::create([
            'nama' => 'Honda Brio',
            'tahun' => 2024,
            'harga' => 160000000,
            'warna' => 'Merah',
            'mesin' => '1.2L i-VTEC',
            'transmisi' => 'Otomatis',
            'kapasitas_penumpang' => 5,
            'fitur_keamanan' => 'ABS, EBD, Airbags',
            'deskripsi' => 'Honda Brio adalah city car yang lincah dan efisien untuk penggunaan harian.'
        ]);

        Mobil::create([
            'nama' => 'Honda Brio',
            'tahun' => 2023,
            'harga' => 155000000,
            'warna' => 'Putih',
            'mesin' => '1.2L i-VTEC',
            'transmisi' => 'Manual',
            'kapasitas_penumpang' => 5,
            'fitur_keamanan' => 'ABS, Airbags',
            'deskripsi' => 'Varian manual yang memberikan sensasi mengemudi yang lebih aktif.'
        ]);
    }
}
