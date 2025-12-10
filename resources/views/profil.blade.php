@extends('layout')

@section('title', 'Profil')

@section('content')

<div class="max-w-5xl mx-auto bg-white shadow-md p-6 rounded-lg">

    {{-- FOTO & JUDUL --}}
    <div class="flex flex-col items-center gap-3 mb-8">
        
    <img src="{{ asset('images/smkpws.png') }}"
         class="w-full h-56 object-cover rounded-lg shadow-md border"
         alt="Logo LSP">

    <h1 class="text-2xl font-bold text-[#8B0000] tracking-wide">
        LSP SMKN 1 PURWOSARI
    </h1>
</div>


    {{-- TABEL --}}
    <table class="w-full border border-gray-300 rounded-lg overflow-hidden text-[16px]">
        
        <tr class="bg-gray-100">
            <td class="p-3 font-semibold w-1/3 border border-gray-300">Nama Sekolah</td>
            <td class="p-3 border border-gray-300">SMKN 1 PURWOSARI</td>
        </tr>

        <tr>
            <td class="p-3 font-semibold border border-gray-300">Jenis Sekolah</td>
            <td class="p-3 border border-gray-300">Kejuruan</td>
        </tr>

        <tr class="bg-gray-100">
            <td class="p-3 font-semibold border border-gray-300">Didirikan Pada</td>
            <td class="p-3 border border-gray-300">29 Oktober 2004 </td>
        </tr>

        <tr>
            <td class="p-3 font-semibold border border-gray-300">Alamat</td>
            <td class="p-3 border border-gray-300">Jl. Raya Purwosari No. 1, Kec Purwosari, Kab Pasuruan, Jawa Timur 67162</td>
        </tr>

        <tr class="bg-gray-100">
            <td class="p-3 font-semibold border border-gray-300">Nomor Statistik Sekolah</td>
            <td class="p-3 border border-gray-300">123456789012</td>
        </tr>

        <tr>
            <td class="p-3 font-semibold border border-gray-300">Izin Operasional</td>
            <td class="p-3 border border-gray-300">SK No. 291/O/1999 tertanggal 20 Oktober 1999</td>
        </tr>

        <tr class="bg-gray-100">
            <td class="p-3 font-semibold border border-gray-300">Kompetensi Keahlian Terakreditasi</td>
            <td class="p-3 border border-gray-300">
                <ul class="list-disc ml-6">
                    <li>Rekayasa Perangkat Lunak</li>
                    <li>Desain Komunikasi Visual</li>
                    <li>Teknik Komputer & Jaringan</li>
                    <li>Mekatronik</li>
                    <li>Teknik Pemesinan</li>
                    <li>Teknik Kendaraan Ringan</li>
                    <li>Teknik Bodi Kendaraan Ringan</li>
                    <li>Teknik Pengelasan</li>
                    <li>Agribisnis Pengolahan Hasil Pertanian</li>
                    <li>Agribisnis Tanaman Pangan & Hortikultura</li>
                </ul>
            </td>
        </tr>

    </table>

</div>

@endsection
