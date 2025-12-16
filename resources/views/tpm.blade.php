@extends('layout')

@section('title', 'TPM')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">
            Teknik Pemesinan (TPM)
        </h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Jurusan teknik manufaktur yang menyiapkan tenaga ahli mesin industri dan produksi presisi.
        </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Itu TPM?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknik Pemesinan adalah jurusan yang mempelajari proses pembuatan komponen menggunakan mesin
                industri seperti bubut, frais, CNC, grinding, dan pengelasan. Jurusan ini melatih siswa menjadi
                tenaga ahli yang siap bekerja di dunia industri manufaktur.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Saja yang Dipelajari?</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Teknik Bubut & Frais</li>
                <li>Pengoperasian Mesin CNC</li>
                <li>Gambar Teknik & CAD</li>
                <li>Pengelasan & Fabrikasi</li>
                <li>Quality Control & Alat Ukur</li>
                <li>Maintenance Mesin Industri</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan TPM memiliki peluang kerja luas di perusahaan otomotif, manufaktur, pabrik logam,
                industri pesawat, galangan kapal, bengkel teknik, hingga perusahaan teknologi mesin presisi.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Jurusan ini cocok bagi siswa yang teliti, disiplin, menyukai mesin, mampu berpikir teknis,
                dan senang menghadapi tantangan dalam menghasilkan produk presisi berkualitas tinggi.
            </p>
        </div>

    </div>

    <!-- Card Motivasi -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-[#B58A3A]">
            <p class="text-lg text-[#800000] leading-relaxed italic">
                “Teknik Pemesinan bukan hanya tentang mengoperasikan mesin, tetapi tentang kemampuan analisa,
                ketelitian, dan profesionalitas dalam menghasilkan produk berkualitas tinggi yang dibutuhkan
                industri masa kini.”
            </p>
        </div>
    </div>

</div>

<!-- Sertifikasi -->
<div class="max-w-6xl mx-auto px-6 pb-6">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Teknik Pemesinan (TPM)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini bertujuan memastikan peserta mampu mengoperasikan mesin produksi seperti bubut, CNC,
        frais, serta memahami standar ukuran, keselamatan kerja, dan proses finishing industri manufaktur.
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
                    <td class="px-4 py-2 border">TPM.01.001</td>
                    <td class="px-4 py-2 border">Mengoperasikan Mesin Bubut</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">2</td>
                    <td class="px-4 py-2 border">TPM.01.002</td>
                    <td class="px-4 py-2 border">Mesin CNC Dasar</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">3</td>
                    <td class="px-4 py-2 border">TPM.01.003</td>
                    <td class="px-4 py-2 border">Alat Ukur Teknik</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">4</td>
                    <td class="px-4 py-2 border">TPM.01.004</td>
                    <td class="px-4 py-2 border">Keselamatan Kerja (K3)</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
