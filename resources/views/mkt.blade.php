@extends('layout')

@section('title', 'MKT')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">
            Mekatronika (MKT)
        </h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Jurusan teknologi modern yang menggabungkan mesin, elektronika, dan pemrograman untuk industri masa depan.
        </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Itu Mekatronika?</h2>
            <p class="text-gray-700 leading-relaxed">
                Mekatronika adalah jurusan yang menggabungkan ilmu mekanik, elektronika, robotik, dan pemrograman 
                untuk membangun sistem otomatis dan mesin pintar. Jurusan ini sangat relevan dengan era industri 4.0
                karena berfokus pada automation, robotics, dan sistem kontrol modern.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Saja yang Dipelajari?</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Robotika & Automation</li>
                <li>Sistem Mekanik</li>
                <li>Elektronika & Sensor</li>
                <li>Pemrograman PLC & Mikrokontroler</li>
                <li>Embedded System & IoT</li>
                <li>Perawatan & Perakitan Mesin Industri</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan Mekatronika memiliki peluang kerja luas di bidang industri otomasi, robotika, sistem kontrol,
                manufaktur pintar, perusahaan otomotif, pabrik elektronik, hingga startup teknologi berbasis IoT
                dan automation engineering.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Jurusan ini cocok bagi siswa yang kreatif, teliti, suka teknologi, senang memecahkan masalah,
                dan memiliki minat pada robot, mesin, elektronika, serta pemrograman.
            </p>
        </div>

    </div>

    <!-- Card Motivasi -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-[#B58A3A]">
            <p class="text-lg text-[#800000] leading-relaxed italic">
                “Teknologi masa depan dibangun oleh sistem otomatis dan robot cerdas. 
                Dengan memilih jurusan Mekatronika, kamu sedang mempersiapkan diri menjadi bagian dari
                inovasi industri modern dan teknologi pintar.”
            </p>
        </div>
    </div>

</div>

<!-- Sertifikasi -->
<div class="max-w-6xl mx-auto px-6 pb-6">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Mekatronika (MKT)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema sertifikasi ini berfokus pada penguasaan sistem otomasi industri, mikrokontroler,
        sensor dan aktuator, motor listrik, serta integrasi sistem mekanik dengan kontrol elektronik.
        Skema ini bertujuan memastikan peserta siap menghadapi kebutuhan industri modern berbasis teknologi.
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
                    <td class="px-4 py-2 border">MKT.01.001</td>
                    <td class="px-4 py-2 border">Dasar Elektronika dan Kelistrikan</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">2</td>
                    <td class="px-4 py-2 border">MKT.01.002</td>
                    <td class="px-4 py-2 border">Pemrograman Mikrokontroler</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">3</td>
                    <td class="px-4 py-2 border">MKT.01.003</td>
                    <td class="px-4 py-2 border">Sistem Sensor dan Aktuator</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
