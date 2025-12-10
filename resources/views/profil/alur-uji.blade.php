@extends('layout')

@section('title', 'Alur Uji Kompetensi')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-[#8B0000] to-[#FFD700] py-16 px-4 flex flex-col items-center">

    <!-- Judul Halaman dengan styling yang terlihat -->
    <h1 class="text-4xl font-extrabold mb-8 text-center text-[#FFD700] drop-shadow-lg transform opacity-0 animate-slide-left">
        Alur Uji Kompetensi
    </h1>

    <!-- Card / Frame Gambar -->
    <div class="bg-white rounded-3xl shadow-2xl p-4 max-w-3xl w-full
                transform opacity-0 animate-fade-in">
        <img src="{{ asset('images/alur-lsp.png') }}" alt="Alur Uji Kompetensi" class="w-full h-auto rounded-xl">
    </div>

</div>

<!-- Animasi Tailwind -->
<style>
@keyframes fade-in {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
  animation: fade-in 0.8s ease-out forwards;
}

@keyframes slide-left {
  0% { opacity: 0; transform: translateX(-50px); }
  100% { opacity: 1; transform: translateX(0); }
}
.animate-slide-left {
  animation: slide-left 0.8s ease-out forwards;
}

</style>
@endsection
