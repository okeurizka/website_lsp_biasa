@extends('layout')

@section('title', 'TPM')

@section('content')

<div class="container mx-auto px-6 py-10">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-[#800000] text-center mb-10">
        Teknik Pemesinan (TPM)
    </h1>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Itu TPM?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknik Pemesinan adalah jurusan yang mempelajari proses pembuatan komponen menggunakan mesin industri seperti
                bubut, frais, CNC, grinding, dan pengelasan. Jurusan ini melatih siswa menjadi tenaga ahli yang siap bekerja
                di dunia industri manufaktur.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Saja yang Dipelajari?</h2>
            <ul class="text-gray-700 space-y-2">
                <li>🔧 Teknik Bubut & Frais</li>
                <li>⚙️ Pengoperasian Mesin CNC</li>
                <li>📏 Gambar Teknik & CAD</li>
                <li>🔥 Pengelasan & Fabrikasi</li>
                <li>🔩 Quality Control & Measuring Tools</li>
                <li>🛠️ Maintenance Mesin Industri</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan TPM memiliki peluang kerja luas di perusahaan otomotif, manufaktur, pabrik logam, industri pesawat,
                galangan kapal, bengkel teknik, hingga perusahaan teknologi robotik dan mesin presisi.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Jurusan ini cocok bagi siswa yang teliti, disiplin, suka bekerja dengan mesin, mampu berpikir teknis, serta
                menyukai tantangan dalam menghasilkan produk presisi berkualitas tinggi.
            </p>
        </div>
    </div>

    <!-- Extra Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-[#B58A3A] mt-10">
        <p class="text-gray-700 text-lg leading-relaxed">
            "Teknik Pemesinan bukan hanya tentang mengoperasikan mesin, tetapi tentang kemampuan analisa, ketelitian,
            dan profesionalitas dalam menghasilkan produk berkualitas tinggi yang dibutuhkan industri masa kini."
        </p>
    </div>

</div>

<div class="max-w-6xl mx-auto px-6 pb-6 mt-10">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Teknik Pemesinan (TPM)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini bertujuan memastikan peserta mampu mengoperasikan mesin produksi seperti bubut, CNC, frais, 
        serta memahami standar ukuran, keamanan kerja, dan proses finishing industri manufaktur.
    </p>
</div>

<div class="max-w-6xl mx-auto px-6 pb-20">
<table class="min-w-full bg-white border border-gray-200">
<thead class="bg-[#B58A3A] text-white"><tr><th class="px-4 py-2 border">No</th><th class="px-4 py-2 border">Kode Unit</th><th class="px-4 py-2 border">Judul Unit Kompetensi</th></tr></thead>
<tbody class="text-gray-700">
<tr><td class="px-4 py-2 border">1</td><td class="px-4 py-2 border">TPM.01.001</td><td class="px-4 py-2 border">Mengoperasikan Mesin Bubut</td></tr>
<tr><td class="px-4 py-2 border">2</td><td class="px-4 py-2 border">TPM.01.002</td><td class="px-4 py-2 border">Mesin CNC Dasar</td></tr>
<tr><td class="px-4 py-2 border">3</td><td class="px-4 py-2 border">TPM.01.003</td><td class="px-4 py-2 border">Alat Ukur Teknik</td></tr>
<tr><td class="px-4 py-2 border">4</td><td class="px-4 py-2 border">TPM.01.004</td><td class="px-4 py-2 border">Keselamatan Kerja (K3)</td></tr>
</tbody>
</table></div>

@endsection