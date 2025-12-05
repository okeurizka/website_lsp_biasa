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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Contoh: Uji Kompetensi RPL Gelombang 1
            $table->text('description')->nullable(); // Deskripsi singkat foto
            $table->string('image_path')->unique(); // Path unik tempat file gambar disimpan
            $table->string('image_name')->comment('Nama file asli'); 
            $table->string('jurusan')->nullable()->comment('Jurusan yang terkait dengan kegiatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};