@extends('layout')

@section('title', 'TKJ')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">Teknik Komputer dan Jaringan (TKJ)</h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Jurusan yang berfokus pada teknologi jaringan komputer, perangkat keras, dan infrastruktur IT.
        </p>
    </div>

    <!-- Content -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">
        
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-yellow-500">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa itu TKJ?</h2>
            <p class="leading-relaxed text-gray-700">
                TKJ adalah jurusan yang mempelajari cara merancang, menginstal, mengkonfigurasi, 
                serta menjaga jaringan komputer dan sistem perangkat keras. Siswa diajarkan bagaimana
                membangun jaringan modern yang aman, cepat, dan stabil.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa yang Dipelajari?</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Instalasi & konfigurasi jaringan LAN/WAN</li>
                <li>Routing & switching (Cisco/Mikrotik)</li>
                <li>Administrasi server (Linux & Windows Server)</li>
                <li>Keamanan jaringan & firewall</li>
                <li>Internet of Things (IoT)</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-yellow-500">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Peluang Kerja</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Network Administrator</li>
                <li>IT Support / Technical Support</li>
                <li>Cyber Security Analyst</li>
                <li>System Engineer</li>
                <li>Cloud Technician</li>
                <li>IoT Specialist</li>
            </ul>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Kenapa Memilih TKJ?</h2>
            <p class="leading-relaxed text-gray-700">
                ✔ Dibutuhkan di hampir semua perusahaan<br>
                ✔ Bisa bekerja di bidang keamanan siber<br>
                ✔ Berkaitan dengan perkembangan teknologi modern<br>
                ✔ Banyak peluang sertifikasi internasional (MTCNA, CCNA, CEH, CompTIA+)<br>
                ✔ Bisa bekerja di lapangan maupun remote
            </p>
        </div>
    </div>

    <!-- Card 5 (Motivasi) -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-yellow-500">
            <p class="text-lg text-[#800000] leading-relaxed italic">
                “Di TKJ, kamu belajar bagaimana dunia teknologi bisa saling terhubung.
                Kamu tidak hanya menguasai komputer, tapi menjadi bagian penting dalam sistem komunikasi modern.”
            </p>
        </div>
    </div>

</div>

<!-- SKEMA TKJ -->
<div class="max-w-6xl mx-auto px-6 pb-6 mt-10">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Teknik Komputer dan Jaringan (TKJ)
    </h2>

    <p class="text-gray-700 leading-relaxed">
        Skema Sertifikasi ini disusun berdasarkan standar kompetensi bidang jaringan komputer yang 
        mengacu pada kurikulum nasional dan kebutuhan dunia industri IT, telekomunikasi, serta 
        teknisi jaringan profesional. Melalui skema ini, peserta didik dibekali kemampuan teknis dalam 
        instalasi perangkat jaringan, konfigurasi router, keamanan jaringan, hingga troubleshooting 
        perangkat komputer.
        <br><br>
        Skema Sertifikasi ini menjadi acuan asesor dalam proses penilaian uji kompetensi LSP untuk menentukan 
        tingkat kelayakan dan kesiapan peserta didik dalam dunia kerja bidang jaringan komputer.
    </p>
</div>

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
        <tr><td class="border px-4 py-2">1</td><td class="border px-4 py-2">TKJ.01.001</td><td class="border px-4 py-2">Instalasi Perangkat Komputer</td></tr>
        <tr><td class="border px-4 py-2">2</td><td class="border px-4 py-2">TKJ.01.002</td><td class="border px-4 py-2">Konfigurasi Router & Access Point</td></tr>
        <tr><td class="border px-4 py-2">3</td><td class="border px-4 py-2">TKJ.01.003</td><td class="border px-4 py-2">Perawatan & Troubleshooting Jaringan</td></tr>
        <tr><td class="border px-4 py-2">4</td><td class="border px-4 py-2">TKJ.01.004</td><td class="border px-4 py-2">Administrasi Server Berbasis Linux</td></tr>
        <tr><td class="border px-4 py-2">5</td><td class="border px-4 py-2">TKJ.01.005</td><td class="border px-4 py-2">Keamanan Jaringan Dasar</td></tr>
      </tbody>
    </table>
  </div>
</div>


@endsection