@extends('layout')

@section('title', 'Struktur Organisasi')

@section('content')

<!-- HEADER DENGAN ANIMASI -->
<section class="py-14 bg-white text-center">
    <div class="inline-block opacity-0 animate-fadeUp">
        <h1 class="text-4xl font-extrabold text-[#800000] tracking-wide">
            Struktur Organisasi
        </h1>

        <div class="w-24 h-1 bg-[#B58A3A] mx-auto mt-4 rounded-full"></div>

        <p class="mt-3 text-lg text-[#800000] font-semibold">
            SMK Negeri 1 Purwosari – Pasuruan, Jawa Timur
        </p>
    </div>
</section>

<!-- KONTEN UTAMA -->
<section class="pb-24">
    <div class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16">

        <!-- ===== KEPALA SEKOLAH ===== -->
        <div class="text-center mb-20">
            <img src="{{ asset('images/anon.png') }}"
                 class="w-40 h-40 rounded-full object-cover mx-auto border-4 border-[#7A1F1F] shadow-xl">
            <h2 class="mt-5 text-2xl font-bold text-[#7A1F1F]">Nama Kepala Sekolah</h2>
            <p class="text-[#7A1F1F]/80 font-medium">Kepala Sekolah</p>
        </div>

        <!-- ===== GRID STRUKTUR ===== -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

            @php
                $jabatan = [
                    'Wakil Kepala Sekolah Bidang Kurikulum',
                    'Wakil Kepala Sekolah Bidang Kesiswaan',
                    'Wakil Kepala Sekolah Bidang Sarpras',
                    'Wakil Kepala Sekolah Bidang Humas',
                    'Kepala Tata Usaha',
                    'Koordinator Bursa Kerja Khusus',
                    'Koordinator Prakerin / PKL',
                    'Koordinator Ekstrakurikuler',
                    'Koordinator Perpustakaan',
                ];
            @endphp

            @foreach ($jabatan as $j)
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F] text-center">
                <img src="{{ asset('images/anon.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">{{ $j }}</p>
            </div>
            @endforeach

        </div>
    </div>
</section>

<style>
@keyframes fadeUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fadeUp {
  animation: fadeUp 0.9s ease-out forwards;
}
</style>

@endsection
