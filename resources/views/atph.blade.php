@extends('layout')

@section('title', 'ATPH')

@section('content')

<div class="container mx-auto px-6 py-10">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-[#800000] text-center mb-10">
        Agribisnis Tanaman Pangan dan Hortikultura (ATPH)
    </h1>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Itu ATPH?</h2>
            <p class="text-gray-700 leading-relaxed">
                Agribisnis Tanaman Pangan dan Hortikultura adalah jurusan yang mempelajari metode budidaya tanaman,
                perawatan, pemupukan, panen, hingga pemasaran hasil pertanian. Jurusan ini menjadikan siswa ahli
                dalam pengelolaan sistem pertanian modern dan berkelanjutan.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Saja yang Dipelajari?</h2>
            <p class="text-gray-700 leading-relaxed">
                Pada jurusan ini siswa belajar teknik budidaya tanaman pangan dan hortikultura, sistem irigasi modern,
                pengendalian hama terpadu, pemupukan, rekayasa media tanam, serta pemasaran dan kewirausahaan bidang pertanian.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan ATPH dapat bekerja di industri pertanian, perusahaan benih, penyuluh pertanian, kebun hortikultura,
                laboratorium pertanian, green house modern, serta membuka usaha pertanian organik atau hidroponik.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Jurusan ini cocok bagi siswa yang sabar, tekun, menyukai alam, punya rasa ingin tahu tinggi, serta minat
                terhadap teknologi pertanian dan keberlanjutan lingkungan.
            </p>
        </div>
    </div>

    <!-- Extra Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-[#B58A3A] mt-10">
        <p class="text-gray-700 text-lg leading-relaxed text-center">
            "Agribisnis Tanaman Pangan dan Hortikultura bukan hanya tentang menanam, tetapi menciptakan sumber pangan
            berkualitas tinggi untuk masa depan dan menjadi bagian penting dari ketahanan pangan bangsa."
        </p>
    </div>

</div>

<div class="max-w-6xl mx-auto px-6 pb-6 mt-10">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Agribisnis Tanaman Pangan dan Hortikultura (ATPH)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini dirancang untuk memastikan peserta mampu melaksanakan teknik budidaya tanaman,
        menerapkan pengendalian organisme pengganggu tanaman, serta mengelola panen dan pascapanen secara profesional sesuai standar industri pertanian.
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
<tr><td class="px-4 py-2 border">1</td><td class="px-4 py-2 border">ATPH.01.001</td><td class="px-4 py-2 border">Budidaya Tanaman Pangan</td></tr>
<tr><td class="px-4 py-2 border">2</td><td class="px-4 py-2 border">ATPH.01.002</td><td class="px-4 py-2 border">Teknik Pemupukan dan Irigasi</td></tr>
<tr><td class="px-4 py-2 border">3</td><td class="px-4 py-2 border">ATPH.01.003</td><td class="px-4 py-2 border">Pengendalian Hama dan Penyakit Tanaman</td></tr>
<tr><td class="px-4 py-2 border">4</td><td class="px-4 py-2 border">ATPH.01.004</td><td class="px-4 py-2 border">Panen dan Pascapanen Hortikultura</td></tr>
</tbody>
</table>
</div>

@endsection
