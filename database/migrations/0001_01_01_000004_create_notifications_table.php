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
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id('id_notifikasi'); // Primary key untuk notifikasi
            $table->unsignedBigInteger('id_laporan'); // Foreign key dari id laporan sebelumnya
            
            // Enum untuk menyimpan status laporan
            $table->enum('status_laporan', ['Ditunda', 'Dikerjakan', 'Ditolak', 'Sukses']);
            
            $table->timestamps(); // Timestamps untuk created_at dan updated_at

            // Set foreign key constraint
            $table->foreign('id_laporan')->references('id')->on('pelaporan_kerusakan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi');
    }
};
