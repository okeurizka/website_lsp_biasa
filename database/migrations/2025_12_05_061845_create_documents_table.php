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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Contoh: Formulir APL 01
            $table->text('description')->nullable(); // Penjelasan singkat dokumen
            $table->string('file_path')->unique(); // Path unik tempat file disimpan (e.g., /storage/documents/apl01.pdf)
            $table->string('file_name')->comment('Nama file asli untuk di-download'); 
            $table->enum('type', ['formulir', 'panduan', 'lainnya'])->default('lainnya')->comment('Kategori dokumen');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};