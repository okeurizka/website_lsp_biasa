@extends('layout')

@section('title', 'APHP')

@section('content')

<div class="container mx-auto px-6 py-10">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-[#800000] text-center mb-10">
        Agribisnis Pengolahan Hasil Pertanian (APHP)
    </h1>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Itu APHP?</h2>
            <p class="text-gray-700 leading-relaxed">
                Agribisnis Pengolahan Hasil Pertanian adalah jurusan yang mempelajari proses pengolahan,
                pengemasan, penyimpanan, hingga pemasaran produk pangan olahan berbahan dasar pertanian.
                Jurusan ini membentuk tenaga ahli pangan yang mampu menghasilkan produk bernilai tambah tinggi.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Saja yang Dipelajari?</h2>
            <p class="text-gray-700 leading-relaxed">
                Siswa mempelajari teknologi pengolahan makanan, pengemasan modern, manajemen sanitasi pangan,
                HACCP, fermentasi, pengolahan susu, buah, sayur, hingga teknologi produk pangan kering dan basah,
                serta pemasaran berbasis agribisnis modern.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan APHP dapat bekerja di industri makanan dan minuman, laboratorium mutu pangan, UMKM
                pangan, perusahaan ekspor olahan pertanian, hotel, restoran, hingga membuka usaha makanan
                kemasan atau brand kuliner sendiri.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Jurusan ini cocok bagi siswa yang kreatif, teliti, suka memasak, peduli kebersihan pangan,
                senang eksperimen, dan memiliki kemampuan manajemen produk serta ketertarikan pada industri makanan.
            </p>
        </div>
    </div>

    <!-- Extra Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-[#B58A3A] mt-10">
        <p class="text-gray-700 text-lg leading-relaxed text-center">
            "APHP bukan hanya tentang membuat makanan, tetapi menciptakan produk bernilai tambah tinggi yang aman,
            berkualitas, bernutrisi, dan mampu bersaing di pasar lokal hingga internasional."
        </p>
    </div>

</div>

<div class="max-w-6xl mx-auto px-6 pb-6 mt-10">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Agribisnis Pengolahan Hasil Pertanian (APHP)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini memastikan peserta memiliki kemampuan mengolah bahan pangan, menerapkan standar keamanan pangan,
        melakukan pengemasan modern, serta memahami proses pengawetan dan distribusi produk pangan olahan.
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
<tr><td class="px-4 py-2 border">1</td><td class="px-4 py-2 border">APHP.01.001</td><td class="px-4 py-2 border">Pengolahan Produk Pangan Dasar</td></tr>
<tr><td class="px-4 py-2 border">2</td><td class="px-4 py-2 border">APHP.01.002</td><td class="px-4 py-2 border">Sanitasi dan Higienitas Pangan</td></tr>
<tr><td class="px-4 py-2 border">3</td><td class="px-4 py-2 border">APHP.01.003</td><td class="px-4 py-2 border">Pengemasan dan Penyimpanan Produk</td></tr>
<tr><td class="px-4 py-2 border">4</td><td class="px-4 py-2 border">APHP.01.004</td><td class="px-4 py-2 border">Pengawetan dan Teknologi Fermentasi</td></tr>
</tbody>
</table>
</div>

@endsection
