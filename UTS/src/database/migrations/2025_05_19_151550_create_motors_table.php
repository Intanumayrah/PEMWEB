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
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->index();               // Nama motor, misal "Yamaha NMax"
            $table->integer('tahun');                       // Tahun produksi
            $table->bigInteger('harga');                    // Harga motor (gunakan bigInteger agar bisa menampung nilai besar)
            $table->string('warna');                        // Warna motor
            $table->string('mesin');                        // Spesifikasi mesin, contoh "155cc SOHC"
            $table->string('transmisi');                    // Jenis transmisi, contoh "manual" atau "otomatis"
            $table->integer('kapasitas_mesin');             // Kapasitas mesin dalam cc
            $table->string('tipe_bahan_bakar');             // Tipe bahan bakar, contoh "bensin"
            $table->json('fitur_keamanan')->nullable();     // Fitur keamanan dalam format JSON
            $table->text('deskripsi')->nullable();          // Deskripsi tambahan
            $table->timestamps();                            // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motors');
    }
};