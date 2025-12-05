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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string( 'name')->comment('Nama/Judul Uji (e.g., Uji Sertifikasi Gelombang 1)');
            $table->string('jurusan')->comment('Jurusan/Sektor yang diuji');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('location')->nullable()->comment('Lokasi Uji (e.g., Lab RPL)');
            $table->text('technical_info')->nullable()->comment('Informasi Teknis (alat, dll.)');
            $table->text('requirement_notes')->nullable()->comment('Catatan Persyaratan Peserta');
            $table->string('status')->default('upcoming')->comment('Status: upcoming, ongoing, finished');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};