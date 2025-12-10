@extends('layout')

@section('title', 'TL')

@section('content')

<div class="container mx-auto px-6 py-10">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-[#800000] text-center mb-10">
        Teknik Pengelasan (TL)
    </h1>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Itu TL?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknik Pengelasan adalah jurusan yang mempelajari cara menyambung logam menggunakan metode seperti SMAW, GMAW, FCAW, dan GTAW. 
                Siswa dilatih menguasai teknik industri, prosedur keselamatan kerja, serta menghasilkan sambungan berkualitas sesuai standar manufaktur.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Saja yang Dipelajari?</h2>
            <ul class="text-gray-700 space-y-2">
                <li>🔥 Pengelasan SMAW, GMAW, FCAW, GTAW</li>
                <li>🧰 Persiapan Material & Cutting</li>
                <li>📏 Gambar Teknik & Blueprint</li>
                <li>⚙️ Quality Control & Pemeriksaan Hasil Las</li>
                <li>🧪 Prosedur K3 & Keselamatan Kerja</li>
                <li>🚢 Fabrikasi Konstruksi & Perkapalan</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan dapat bekerja di industri konstruksi, perkapalan, manufaktur otomotif, kilang minyak, pabrik baja, hingga pekerjaan luar negeri 
                seperti operator las bersertifikasi internasional.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Cocok untuk siswa yang teliti, tangguh, disiplin, suka tantangan, serta mampu bekerja dengan standar keselamatan tinggi.
            </p>
        </div>
    </div>

    <!-- Extra Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-[#B58A3A] mt-10">
        <p class="text-gray-700 text-lg leading-relaxed">
            "Pengelasan bukan sekadar menyatukan logam, tetapi membangun fondasi teknologi industri masa depan melalui ketelitian, keterampilan, dan keahlian yang bersertifikat."
        </p>
    </div>

</div>

<div class="max-w-6xl mx-auto px-6 pb-6 mt-10">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Teknik Pengelasan (TL)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini dirancang untuk memastikan lulusan mampu melakukan proses pengelasan industri sesuai standar nasional, memahami prosedur keselamatan kerja, 
        serta mampu menghasilkan sambungan yang presisi dan berkualitas.
    </p>
</div>

<div class="max-w-6xl mx-auto px-6 pb-20">
<table class="min-w-full bg-white border border-gray-200">
<thead class="bg-[#B58A3A] text-white"><tr><th class="px-4 py-2 border">No</th><th class="px-4 py-2 border">Kode Unit</th><th class="px-4 py-2 border">Judul Unit Kompetensi</th></tr></thead>
<tbody class="text-gray-700">
<tr><td class="px-4 py-2 border">1</td><td class="px-4 py-2 border">TL.01.001</td><td class="px-4 py-2 border">Dasar-Dasar Pengelasan SMAW</td></tr>
<tr><td class="px-4 py-2 border">2</td><td class="px-4 py-2 border">TL.01.002</td><td class="px-4 py-2 border">Pengelasan GMAW dan FCAW</td></tr>
<tr><td class="px-4 py-2 border">3</td><td class="px-4 py-2 border">TL.01.003</td><td class="px-4 py-2 border">Pengujian Visual & Quality Control</td></tr>
<tr><td class="px-4 py-2 border">4</td><td class="px-4 py-2 border">TL.01.004</td><td class="px-4 py-2 border">K3 Pengelasan & Proteksi Lingkungan Kerja</td></tr>
</tbody>
</table></div>

@endsection
