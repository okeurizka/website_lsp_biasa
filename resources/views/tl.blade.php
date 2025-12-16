@extends('layout')

@section('title', 'TL')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">
            Teknik Pengelasan (TL)
        </h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Jurusan teknik industri yang menyiapkan tenaga ahli pengelasan profesional dan bersertifikat.
        </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Itu TL?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknik Pengelasan adalah jurusan yang mempelajari cara menyambung logam menggunakan berbagai
                metode seperti SMAW, GMAW, FCAW, dan GTAW. Siswa dilatih menguasai teknik industri,
                prosedur keselamatan kerja, serta menghasilkan sambungan berkualitas sesuai standar manufaktur.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Saja yang Dipelajari?</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Pengelasan SMAW, GMAW, FCAW, GTAW</li>
                <li>Persiapan Material & Cutting</li>
                <li>Gambar Teknik & Blueprint</li>
                <li>Quality Control & Pemeriksaan Hasil Las</li>
                <li>K3 & Keselamatan Kerja Pengelasan</li>
                <li>Fabrikasi Konstruksi & Perkapalan</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan Teknik Pengelasan memiliki peluang kerja luas di industri konstruksi, perkapalan,
                manufaktur otomotif, kilang minyak, pabrik baja, hingga bekerja di luar negeri
                sebagai operator las bersertifikasi internasional.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Jurusan ini cocok bagi siswa yang teliti, tangguh, disiplin, menyukai tantangan,
                serta mampu bekerja dengan standar keselamatan tinggi dalam lingkungan industri.
            </p>
        </div>

    </div>

    <!-- Card Motivasi -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-[#B58A3A]">
            <p class="text-lg text-[#800000] leading-relaxed italic">
                “Pengelasan bukan sekadar menyatukan logam, tetapi membangun fondasi teknologi industri
                masa depan melalui ketelitian, keterampilan, dan keahlian yang bersertifikat.”
            </p>
        </div>
    </div>

</div>

<!-- Sertifikasi -->
<div class="max-w-6xl mx-auto px-6 pb-6">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Teknik Pengelasan (TL)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini dirancang untuk memastikan lulusan mampu melakukan proses pengelasan industri
        sesuai standar nasional, memahami prosedur keselamatan kerja,
        serta menghasilkan sambungan yang presisi dan berkualitas.
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
                    <td class="px-4 py-2 border">TL.01.001</td>
                    <td class="px-4 py-2 border">Dasar-Dasar Pengelasan SMAW</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">2</td>
                    <td class="px-4 py-2 border">TL.01.002</td>
                    <td class="px-4 py-2 border">Pengelasan GMAW dan FCAW</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">3</td>
                    <td class="px-4 py-2 border">TL.01.003</td>
                    <td class="px-4 py-2 border">Pengujian Visual & Quality Control</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">4</td>
                    <td class="px-4 py-2 border">TL.01.004</td>
                    <td class="px-4 py-2 border">K3 Pengelasan & Proteksi Lingkungan Kerja</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
