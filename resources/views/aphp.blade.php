@extends('layout')

@section('title', 'APHP')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">
            Agribisnis Pengolahan Hasil Pertanian (APHP)
        </h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Kompetensi keahlian pengolahan pangan bernilai tambah, aman, dan berdaya saing.
        </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Itu APHP?</h2>
            <p class="text-gray-700 leading-relaxed">
                Agribisnis Pengolahan Hasil Pertanian adalah jurusan yang mempelajari proses
                pengolahan, pengemasan, penyimpanan, hingga pemasaran produk pangan
                berbahan dasar pertanian untuk menghasilkan produk bernilai tambah tinggi.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Saja yang Dipelajari?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknologi pengolahan makanan, pengemasan modern, sanitasi pangan,
                HACCP, fermentasi, pengolahan susu, buah, sayur,
                produk pangan kering dan basah, serta pemasaran agribisnis modern.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan APHP dapat bekerja di industri makanan dan minuman,
                laboratorium mutu pangan, UMKM pangan, perusahaan ekspor olahan pertanian,
                hotel, restoran, hingga membuka usaha kuliner atau produk kemasan sendiri.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Cocok bagi siswa yang kreatif, teliti, menyukai pengolahan makanan,
                peduli kebersihan pangan, senang bereksperimen,
                serta memiliki minat pada manajemen produk dan industri pangan.
            </p>
        </div>

    </div>

    <!-- Card Motivasi -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-[#B58A3A]">
            <p class="text-lg text-[#800000] leading-relaxed italic text-center">
                “APHP bukan hanya tentang membuat makanan,
                tetapi menciptakan produk bernilai tambah tinggi yang aman,
                berkualitas, dan mampu bersaing di pasar lokal hingga internasional.”
            </p>
        </div>
    </div>

</div>

<!-- Sertifikasi -->
<div class="max-w-6xl mx-auto px-6 pb-6">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian APHP
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini memastikan peserta mampu mengolah bahan pangan,
        menerapkan standar keamanan pangan,
        melakukan pengemasan modern,
        serta memahami proses pengawetan dan distribusi produk pangan olahan.
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
                    <td class="px-4 py-2 border">APHP.01.001</td>
                    <td class="px-4 py-2 border">Pengolahan Produk Pangan Dasar</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">2</td>
                    <td class="px-4 py-2 border">APHP.01.002</td>
                    <td class="px-4 py-2 border">Sanitasi dan Higienitas Pangan</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">3</td>
                    <td class="px-4 py-2 border">APHP.01.003</td>
                    <td class="px-4 py-2 border">Pengemasan dan Penyimpanan Produk</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">4</td>
                    <td class="px-4 py-2 border">APHP.01.004</td>
                    <td class="px-4 py-2 border">Pengawetan dan Teknologi Fermentasi</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
