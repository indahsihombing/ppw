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
        Schema::create('pelaporan_kerusakan', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama_lengkap'); // Nama Lengkap
            $table->string('nomor_handphone'); // Nomor Handphone
            $table->string('program_studi'); // Program Studi
            $table->string('lokasi_kerusakan'); // Lokasi Kerusakan
            $table->text('deskripsi_kerusakan'); // Deskripsi Kerusakan
            $table->string('foto_kerusakan')->nullable(); // Foto Kerusakan (nullable untuk bisa tidak menyimpan gambar)
            $table->timestamps(); // Timestamps (created_at dan updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaporan_kerusakan');
    }
};
    