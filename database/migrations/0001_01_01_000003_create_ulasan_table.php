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
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id('id_ulasan'); // Primary Key untuk ulasan
            $table->unsignedBigInteger('id_laporan'); // Foreign Key dari id laporan sebelumnya
            
            // Enum untuk menyimpan respon kualitas, kecepatan, kejelasan, dan kepuasan
            $table->enum('kualitas', ['Sangat Baik', 'Baik', 'Cukup', 'Buruk', 'Sangat Buruk']);
            $table->enum('kecepatan', ['Sangat Baik', 'Baik', 'Cukup', 'Buruk', 'Sangat Buruk']);
            $table->enum('kejelasan', ['Sangat Baik', 'Baik', 'Cukup', 'Buruk', 'Sangat Buruk']);
            $table->enum('kepuasan', ['Sangat Baik', 'Baik', 'Cukup', 'Buruk', 'Sangat Buruk']);
            
            $table->text('saran')->nullable(); // Saran opsional (nullable)
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
        Schema::dropIfExists('hasil_survey');
    }
};
