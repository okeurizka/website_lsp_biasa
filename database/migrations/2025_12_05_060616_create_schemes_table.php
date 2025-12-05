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
        Schema::create('schemes', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50)->unique(); // Tambahkan field code yang wajib unik
            $table->string('name', 255);
            $table->string('slug', 255)->unique(); // Untuk URL
            $table->string('jurusan', 100); // RPL, TKJ, dll.
            $table->text('description');
            
            // Kolom diubah dari 'unit_kompetensi' menjadi 'unit_kompetensi_list' agar sesuai dengan Model
            // Menggunakan tipe JSON adalah pilihan terbaik untuk array di MySQL 5.7+
            $table->json('unit_kompetensi_list')->nullable(); 
            
            $table->text('sasaran')->nullable();
            $table->text('tujuan')->nullable();
            $table->timestamps();

            $table->unique(['name', 'jurusan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schemes');
    }
};