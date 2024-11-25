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
        Schema::create('panduan', function (Blueprint $table) {
            $table->id('id_panduan'); // Primary key untuk panduan
            $table->text('panduan'); // Kolom untuk menyimpan teks panduan
            $table->string('gambar')->nullable(); // Kolom opsional untuk menyimpan gambar, nullable (bisa kosong)

            $table->timestamps(); // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panduan');
    }
};
