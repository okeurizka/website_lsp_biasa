@extends('layout')

@section('title', 'Visi & Misi')

@section('content')
   <div class="min-h-screen bg-gradient-to-b from-[#8B0000] to-[#FFD700] py-16 px-6 flex flex-col items-center">

    <!-- Logo di tengah -->
    <img src="{{ asset('images/logo-fix.png') }}" alt="Logo SMK" class="w-32 h-32 mb-12">

    <!-- Visi Card -->
    <div class="bg-white rounded-3xl shadow-2xl p-12 max-w-4xl w-full mb-12
                transform opacity-0 translate-y-10 animate-slide-up">
        <h1 class="text-[#8B0000] text-2xl font-bold mb-4 text-center">Visi</h1>
        <p class="text-[#8B0000] text-lg font-semibold leading-relaxed text-justify">
            Menciptakan lingkungan belajar yang menyenangkan dan inspiratif, di mana setiap siswa dapat mengembangkan kreativitas, kemampuan berpikir kritis, dan karakter positif mereka. Sekolah kami menekankan pengalaman belajar yang menyenangkan, interaktif, dan menantang.
        </p>
    </div>

    <!-- Misi Card -->
    <div class="bg-white rounded-3xl shadow-2xl p-12 max-w-4xl w-full
                transform opacity-0 translate-y-10 animate-slide-up delay-150">
        <h1 class="text-[#8B0000] text-2xl font-bold mb-4 text-center">Misi</h1>
        <ul class="text-[#8B0000] text-lg font-semibold leading-relaxed space-y-4">
            <li class="flex items-start gap-3">
                <span class="text-[#FFD700] mt-1">★</span>
                Menyediakan pengalaman belajar yang interaktif dan kreatif bagi setiap siswa.
            </li>
            <li class="flex items-start gap-3">
                <span class="text-[#FFD700] mt-1">★</span>
                Mendorong siswa untuk mengembangkan ide baru melalui proyek dan kegiatan ekstrakurikuler.
            </li>
            <li class="flex items-start gap-3">
                <span class="text-[#FFD700] mt-1">★</span>
                Membentuk karakter siswa dengan nilai disiplin, tanggung jawab, dan empati.
            </li>
            <li class="flex items-start gap-3">
                <span class="text-[#FFD700] mt-1">★</span>
                Memanfaatkan teknologi modern untuk memperkaya proses belajar.
            </li>
            <li class="flex items-start gap-3">
                <span class="text-[#FFD700] mt-1">★</span>
                Membimbing setiap siswa meraih potensi terbaiknya, baik akademik maupun sosial.
            </li>
        </ul>
    </div>

</div>

<!-- Animasi Tailwind -->
<style>
@keyframes slide-up {
  0% { opacity: 0; transform: translateY(40px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-slide-up {
  animation: slide-up 0.8s ease-out forwards;
}
.delay-150 {
  animation-delay: 0.15s;
}
</style>

@endsection
