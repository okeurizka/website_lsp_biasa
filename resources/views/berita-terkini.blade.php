@extends('layout')

@section('title', 'Berita Terkini')

@section('content')
<!-- Halaman Berita Terkini Elegan -->
<div class="min-h-screen bg-gray-50 px-4 py-6">

  <!-- Hero Section -->
  <section class="relative h-80 rounded-xl overflow-hidden mb-8">
    <img src="{{ asset('images/smkpws.png') }}" alt="Hero" class="absolute w-full h-full object-cover filter blur-sm brightness-50">
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4">
      <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-2">Berita Terkini</h1>
      <p class="text-md md:text-lg text-gray-200 max-w-2xl">Update terbaru seputar kegiatan dan informasi penting lainnya.</p>
    </div>
  </section>

  <!-- Grid Berita -->
  <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Card Berita 1 -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
      <div class="relative">
        <img src="{{ asset('images/smkpws.png') }}" alt="Berita 1" class="w-full h-56 object-cover">
        <!-- Tanggal elegan -->
        <span class="absolute top-3 right-3 bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded-full italic">10 Des 2025</span>
      </div>
      <div class="p-5">
        <!-- Badge Baru elegan -->
        <span class="inline-block mb-2 text-xs font-semibold text-yellow-700 border border-yellow-400 rounded-full px-3 py-0.5 bg-yellow-50">BARU</span>
        <h3 class="text-2xl font-bold text-[#660000] mb-2 hover:text-[#800000] transition-colors">Judul Berita Pertama</h3>
        <p class="text-gray-700 mb-4">Ringkasan berita singkat agar pembaca tahu inti dari berita tersebut dengan menarik dan jelas.</p>
        <a href="#" class="text-yellow-600 font-semibold hover:underline">Baca Selengkapnya →</a>
      </div>
    </div>

    <!-- Card Berita 2 -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
      <div class="relative">
        <img src="{{ asset('images/smkpws.png') }}" alt="Berita 2" class="w-full h-56 object-cover">
        <span class="absolute top-3 right-3 bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded-full italic">09 Des 2025</span>
      </div>
      <div class="p-5">
        <span class="inline-block mb-2 text-xs font-semibold text-yellow-700 border border-yellow-400 rounded-full px-3 py-0.5 bg-yellow-50">BARU</span>
        <h3 class="text-2xl font-bold text-[#660000] mb-2 hover:text-[#800000] transition-colors">Judul Berita Kedua</h3>
        <p class="text-gray-700 mb-4">Ringkasan berita singkat agar pembaca tahu inti dari berita tersebut dengan menarik dan jelas.</p>
        <a href="#" class="text-yellow-600 font-semibold hover:underline">Baca Selengkapnya →</a>
      </div>
    </div>

    <!-- Card Berita 3 -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
      <div class="relative">
        <img src="{{ asset('images/smkpws.png') }}" alt="Berita 3" class="w-full h-56 object-cover">
        <span class="absolute top-3 right-3 bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded-full italic">08 Des 2025</span>
      </div>
      <div class="p-5">
        <span class="inline-block mb-2 text-xs font-semibold text-yellow-700 border border-yellow-400 rounded-full px-3 py-0.5 bg-yellow-50">BARU</span>
        <h3 class="text-2xl font-bold text-[#660000] mb-2 hover:text-[#800000] transition-colors">Judul Berita Ketiga</h3>
        <p class="text-gray-700 mb-4">Ringkasan berita singkat agar pembaca tahu inti dari berita tersebut dengan menarik dan jelas.</p>
        <a href="#" class="text-yellow-600 font-semibold hover:underline">Baca Selengkapnya →</a>
      </div>
    </div>

  </main>
</div>

@endsection
