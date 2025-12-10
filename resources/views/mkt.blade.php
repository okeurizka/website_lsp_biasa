@extends('layout')

@section('title', 'MKT')

@section('content')

<div class="container mx-auto px-6 py-10">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-[#800000] text-center mb-10">
        Mekatronika (MKT)
    </h1>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Itu Mekatronika?</h2>
            <p class="text-gray-700 leading-relaxed">
                Mekatronika adalah jurusan yang menggabungkan ilmu mekanik, elektronika, robotik, dan pemrograman 
                untuk membangun sistem otomatis dan mesin pintar. Jurusan ini cocok untuk era industri 4.0 karena 
                berfokus pada teknologi modern seperti automation, robotics, dan sistem kontrol.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Saja yang Dipelajari?</h2>
            <ul class="text-gray-700 space-y-2">
                <li>🤖 Robotika & Automation</li>
                <li>⚙️ Sistem Mekanik</li>
                <li>🔌 Elektronika & Sensor</li>
                <li>💻 Pemrograman Kontrol PLC & Microcontroller</li>
                <li>📊 Embedded System & IoT</li>
                <li>🛠️ Perawatan & Perakitan Mesin Industri</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan Mekatronika memiliki peluang besar bekerja di industri otomasi, manufaktur pintar, robotika,
                sistem kontrol, perusahaan otomotif, pabrik elektronik, serta startup teknologi berbasis IoT 
                dan automation engineering.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Jurusan ini cocok untuk siswa yang kreatif, suka teknologi, teliti, menikmati tantangan, dan memiliki 
                minat pada robot, mesin, elektronika, serta pemrograman. Kemandirian dan problem solving sangat penting.
            </p>
        </div>
    </div>

    <!-- Extra Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-[#B58A3A] mt-10">
        <p class="text-gray-700 text-lg leading-relaxed">
            "Teknologi masa depan adalah sistem otomatis dan robot cerdas. Dengan memilih jurusan Mekatronika, 
            kamu sedang mempersiapkan diri menjadi bagian dari inovasi industri modern dan sistem pintar."
        </p>
    </div>

</div>

<div class="max-w-6xl mx-auto px-6 pb-6 mt-10">
<h2 class="text-2xl font-bold text-[#800000] mb-3">Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Mekatronika (MKT)</h2>
<p class="text-gray-700 leading-relaxed">
Skema ini berfokus pada sistem otomasi, mikrokontroler, sensor, motor listrik dan integrasi perangkat mekanik dengan sistem kontrol elektronik.
</p>
</div>

<div class="max-w-6xl mx-auto px-6 pb-20">
<table class="min-w-full bg-white border border-gray-200">
<thead class="bg-[#B58A3A] text-white"><tr><th class="px-4 py-2 border">No</th><th class="px-4 py-2 border">Kode Unit</th><th class="px-4 py-2 border">Judul Unit Kompetensi</th></tr></thead>
<tbody class="text-gray-700">
<tr><td class="border px-4 py-2">1</td><td class="border px-4 py-2">MKT.01.001</td><td class="border px-4 py-2">Dasar Elektronika dan Kelistrikan</td></tr>
<tr><td class="border px-4 py-2">2</td><td class="border px-4 py-2">MKT.01.002</td><td class="border px-4 py-2">Pemrograman Mikrokontroler</td></tr>
<tr><td class="border px-4 py-2">3</td><td class="border px-4 py-2">MKT.01.003</td><td class="border px-4 py-2">Sistem Sensor dan Aktuator</td></tr>
</tbody>
</table>
</div>

@endsection