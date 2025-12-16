@extends('layout')

@section('title', 'TBKR')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">
            Teknik Bodi Kendaraan Ringan (TBKR)
        </h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Kompetensi keahlian yang membentuk tenaga profesional perbaikan bodi dan finishing kendaraan.
        </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Itu TBKR?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknik Bodi Kendaraan Ringan adalah jurusan yang mempelajari perbaikan bodi kendaraan,
                pengecatan otomotif, restorasi panel, serta pengelasan ringan untuk mengembalikan
                bentuk, struktur, dan estetika kendaraan sesuai standar pabrikan.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Saja yang Dipelajari?</h2>
            <p class="text-gray-700 leading-relaxed">
                Siswa mempelajari body repair, pendempulan, pengelasan ringan, teknik amplas,
                pengecatan dasar hingga finishing metallic, penggunaan alat ukur,
                serta standar kualitas bengkel profesional.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan TBKR dapat bekerja di bengkel resmi, industri karoseri,
                restorasi otomotif, industri cat dan coating kendaraan,
                detailing profesional, hingga membuka usaha body repair mandiri.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Cocok bagi siswa yang teliti, sabar, memiliki ketelitian visual tinggi,
                menyukai otomotif, detail oriented, dan siap bekerja dengan standar estetika tinggi.
            </p>
        </div>

    </div>

    <!-- Card Motivasi -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-[#B58A3A]">
            <p class="text-lg text-[#800000] leading-relaxed italic text-center">
                “Teknik Bodi Kendaraan Ringan bukan hanya memperbaiki bentuk,
                tetapi mengembalikan estetika, nilai, dan identitas kendaraan
                dengan sentuhan profesional dan presisi tinggi.”
            </p>
        </div>
    </div>

</div>

<!-- Sertifikasi -->
<div class="max-w-6xl mx-auto px-6 pb-6">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Teknik Bodi Kendaraan Ringan (TBKR)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini dirancang untuk memastikan peserta mampu melakukan pemeriksaan kerusakan bodi,
        perbaikan panel, pendempulan, pengelasan ringan, hingga pengecatan dan finishing
        sesuai standar industri otomotif modern.
    </p>
</div>

<!-- Table -->
<div class="max-w-6xl mx-auto px-6 pb-20">
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-[#B58A3A] text-white">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Kode Unit</th>
                    <th class="px-4 py-2 border">Judul Unit Kompetensi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">1</td>
                    <td class="px-4 py-2 border">TBKR.01.001</td>
                    <td class="px-4 py-2 border">Pemeriksaan Kerusakan Bodi Kendaraan</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">2</td>
                    <td class="px-4 py-2 border">TBKR.01.002</td>
                    <td class="px-4 py-2 border">Perbaikan Panel Kendaraan</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">3</td>
                    <td class="px-4 py-2 border">TBKR.01.003</td>
                    <td class="px-4 py-2 border">Pendempulan dan Pengamplasan</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">4</td>
                    <td class="px-4 py-2 border">TBKR.01.004</td>
                    <td class="px-4 py-2 border">Pengecatan Dasar Hingga Finishing</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">5</td>
                    <td class="px-4 py-2 border">TBKR.01.005</td>
                    <td class="px-4 py-2 border">Pemeriksaan Hasil Body Repair</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
