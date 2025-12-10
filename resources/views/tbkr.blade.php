@extends('layout')

@section('title', 'TBKR')

@section('content')

<div class="container mx-auto px-6 py-10">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-[#800000] text-center mb-10">
        Teknik Bodi Kendaraan Ringan (TBKR)
    </h1>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Itu TBKR?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknik Bodi Kendaraan Ringan adalah jurusan yang mempelajari perbaikan bodi kendaraan, pengecatan otomotif,
                restorasi panel, serta pengelasan ringan. Jurusan ini membentuk tenaga ahli perbaikan tampilan kendaraan
                agar kembali ke standar estetika dan struktur pabrik.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Saja yang Dipelajari?</h2>
            <p class="text-gray-700 leading-relaxed">
                Siswa mempelajari teknik body repair, pendempulan, pengelasan ringan, teknik amplas, pengecatan dasar hingga
                finishing metallic, penggunaan alat ukur, teknik perbaikan panel, hingga standar kualitas bengkel profesional.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan TBKR dapat bekerja di bengkel resmi (Auto2000, Mitsubishi, Honda), industri karoseri, restorasi
                otomotif, industri cat dan coating kendaraan, detailing profesional, hingga membuka usaha body repair mandiri.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Jurusan ini cocok untuk siswa yang teliti, sabar, memiliki ketelitian visual tinggi, menyukai otomotif,
                detail oriented, serta siap bekerja dalam lingkungan yang membutuhkan standar estetika tinggi.
            </p>
        </div>
    </div>

    <!-- Extra Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-[#B58A3A] mt-10">
        <p class="text-gray-700 text-lg leading-relaxed text-center">
            "Teknik Bodi Kendaraan Ringan bukan hanya memperbaiki bentuk kendaraan, tetapi mengembalikan estetika, nilai,
            dan identitas kendaraan dengan sentuhan profesional dan presisi tinggi."
        </p>
    </div>

</div>

<div class="max-w-6xl mx-auto px-6 pb-6 mt-10">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Teknik Bodi Kendaraan Ringan (TBKR)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini dirancang untuk memastikan peserta mampu melakukan pemeriksaan kerusakan bodi, perbaikan panel,
        pendempulan, pengelasaan ringan, pengecatan dasar hingga finishing sesuai standar industri otomotif modern.
    </p>
</div>

<div class="max-w-6xl mx-auto px-6 pb-20">
<table class="min-w-full bg-white border border-gray-200">
<thead class="bg-[#B58A3A] text-white">
<tr>
    <th class="px-4 py-2 border">No</th>
    <th class="px-4 py-2 border">Kode Unit</th>
    <th class="px-4 py-2 border">Judul Unit Kompetensi</th>
</tr>
</thead>
<tbody class="text-gray-700">
<tr><td class="px-4 py-2 border">1</td><td class="px-4 py-2 border">TBKR.01.001</td><td class="px-4 py-2 border">Pemeriksaan Kerusakan Bodi Kendaraan</td></tr>
<tr><td class="px-4 py-2 border">2</td><td class="px-4 py-2 border">TBKR.01.002</td><td class="px-4 py-2 border">Perbaikan Panel Kendaraan</td></tr>
<tr><td class="px-4 py-2 border">3</td><td class="px-4 py-2 border">TBKR.01.003</td><td class="px-4 py-2 border">Pendempulan dan Pengamplasan</td></tr>
<tr><td class="px-4 py-2 border">4</td><td class="px-4 py-2 border">TBKR.01.004</td><td class="px-4 py-2 border">Pengecatan Dasar Hingga Finishing</td></tr>
<tr><td class="px-4 py-2 border">5</td><td class="px-4 py-2 border">TBKR.01.005</td><td class="px-4 py-2 border">Pemeriksaan Hasil Body Repair</td></tr>
</tbody>
</table>
</div>

@endsection
