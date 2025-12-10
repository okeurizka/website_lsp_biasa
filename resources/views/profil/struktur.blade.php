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

        <!-- ===== KEPALA SEKOLAH ===== -->
        <div class="text-center mb-16">
            <img src="{{ asset('images/kepala-sekolah.png') }}" 
                 class="w-40 h-40 rounded-full object-cover mx-auto border-4 border-[#7A1F1F] shadow-xl">
            <h2 class="mt-5 text-2xl font-bold text-[#7A1F1F]">Nama Kepala Sekolah</h2>
            <p class="text-[#7A1F1F]/80 font-medium">Kepala Sekolah</p>
        </div>


        <!-- ===== GRID STRUKTUR ===== -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- ITEM 1 -->
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F]">
                <img src="{{ asset('images/struktur1.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">Wakil Kepala Sekolah Bidang Kurikulum</p>
            </div>

            <!-- ITEM 2 -->
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F]">
                <img src="{{ asset('images/struktur2.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">Wakil Kepala Sekolah Bidang Kesiswaan</p>
            </div>

            <!-- ITEM 3 -->
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F]">
                <img src="{{ asset('images/struktur3.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">Wakil Kepala Sekolah Bidang Sarpras</p>
            </div>

            <!-- ITEM 4 -->
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F]">
                <img src="{{ asset('images/struktur4.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">Wakil Kepala Sekolah Bidang Humas</p>
            </div>

            <!-- ITEM 5 -->
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F]">
                <img src="{{ asset('images/struktur5.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">Kepala Tata Usaha</p>
            </div>

            <!-- ITEM 6 -->
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F]">
                <img src="{{ asset('images/struktur6.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">Koordinator Bursa Kerja Khusus</p>
            </div>

            <!-- ITEM 7 -->
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F]">
                <img src="{{ asset('images/struktur7.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">Koordinator Prakerin / PKL</p>
            </div>

            <!-- ITEM 8 -->
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F]">
                <img src="{{ asset('images/struktur8.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">Koordinator Ekstrakurikuler</p>
            </div>

            <!-- ITEM 9 -->
            <div class="bg-white rounded-2xl p-6 shadow-xl border-t-4 border-[#7A1F1F]">
                <img src="{{ asset('images/struktur9.png') }}"
                     class="w-32 h-32 rounded-full object-cover mx-auto border-4 border-[#E5B700] shadow-md">
                <h3 class="mt-4 text-xl font-bold text-[#7A1F1F]">Nama Lengkap</h3>
                <p class="text-[#7A1F1F]/80 font-medium">Koordinator Perpustakaan</p>
            </div>

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