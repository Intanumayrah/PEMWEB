<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama');                 // nama mobil, misal "Honda Brio"
            $table->year('tahun');                  // tahun produksi
            $table->integer('harga');               // harga mobil
            $table->string('warna');                // warna mobil
            $table->string('mesin');                // spesifikasi mesin
            $table->string('transmisi');            // jenis transmisi
            $table->integer('kapasitas_penumpang'); // kapasitas penumpang
            $table->text('fitur_keamanan');        // fitur keamanan
            $table->text('deskripsi');              // deskripsi tambahan
            $table->timestamps();                   // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};