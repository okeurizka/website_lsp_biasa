@extends('layout')

@section('title', 'ATPH')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">
            Agribisnis Tanaman Pangan dan Hortikultura (ATPH)
        </h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Kompetensi keahlian budidaya pertanian modern yang berkelanjutan dan berdaya saing.
        </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Itu ATPH?</h2>
            <p class="text-gray-700 leading-relaxed">
                Agribisnis Tanaman Pangan dan Hortikultura adalah jurusan yang mempelajari
                teknik budidaya tanaman, perawatan, pemupukan, panen,
                hingga pemasaran hasil pertanian.
                Jurusan ini membentuk tenaga terampil dalam pengelolaan pertanian modern dan berkelanjutan.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Saja yang Dipelajari?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknik budidaya tanaman pangan dan hortikultura,
                sistem irigasi modern, pengendalian hama terpadu,
                pemupukan, rekayasa media tanam,
                serta kewirausahaan dan pemasaran hasil pertanian.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan ATPH dapat bekerja di industri pertanian,
                perusahaan benih, penyuluh pertanian,
                kebun hortikultura, laboratorium pertanian,
                greenhouse modern,
                hingga membuka usaha pertanian organik atau hidroponik.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Cocok bagi siswa yang sabar, tekun, menyukai alam,
                memiliki rasa ingin tahu tinggi,
                serta minat terhadap teknologi pertanian
                dan keberlanjutan lingkungan.
            </p>
        </div>

    </div>

    <!-- Card Motivasi -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-[#B58A3A]">
            <p class="text-lg text-[#800000] leading-relaxed italic text-center">
                “Agribisnis Tanaman Pangan dan Hortikultura bukan hanya tentang menanam,
                tetapi menciptakan sumber pangan berkualitas tinggi
                demi masa depan dan ketahanan pangan bangsa.”
            </p>
        </div>
    </div>

</div>

<!-- Sertifikasi -->
<div class="max-w-6xl mx-auto px-6 pb-6">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian ATPH
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini dirancang untuk memastikan peserta mampu
        melaksanakan teknik budidaya tanaman,
        menerapkan pengendalian organisme pengganggu tanaman,
        serta mengelola panen dan pascapanen
        sesuai standar industri pertanian profesional.
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
                    <td class="px-4 py-2 border">ATPH.01.001</td>
                    <td class="px-4 py-2 border">Budidaya Tanaman Pangan</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">2</td>
                    <td class="px-4 py-2 border">ATPH.01.002</td>
                    <td class="px-4 py-2 border">Teknik Pemupukan dan Irigasi</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">3</td>
                    <td class="px-4 py-2 border">ATPH.01.003</td>
                    <td class="px-4 py-2 border">Pengendalian Hama dan Penyakit Tanaman</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">4</td>
                    <td class="px-4 py-2 border">ATPH.01.004</td>
                    <td class="px-4 py-2 border">Panen dan Pascapanen Hortikultura</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
