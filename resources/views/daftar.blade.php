@extends('layout')

@section('title', 'Daftar Peserta LSP')

@section('content')

<!-- Wrapper Background -->
<div class="pt-20 pb-20 min-h-screen relative bg-cover bg-center"
     style="background-image: url('{{ asset('images/smkpws.png') }}');">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

    <!-- Logo (di luar card) -->
    <div class="relative flex justify-center mb-6">
        <img src="{{ asset('images/logo-fix.png') }}" 
             class="w-32 drop-shadow-2xl animate-[fadeIn_.8s_ease-out]">
    </div>

    <!-- Popup -->
    @if (session('success'))
        <div 
            x-data="{show:true}" 
            x-init="setTimeout(()=>show=false,1800)"
            x-show="show"
            x-transition
            class="fixed top-5 right-5 px-6 py-3 rounded-lg shadow-lg text-white 
                   font-semibold bg-[#C9A14A]">
            {{ session('success') }}
        </div>
    @endif

    <!-- Card Form -->
    <div class="relative max-w-lg mx-auto bg-white/90 backdrop-blur-xl p-10 
                rounded-2xl shadow-2xl border border-[#7A0010]/20 
                animate-[fadeInUp_.7s_ease-out]">

        <h2 class="text-3xl font-extrabold text-center mb-6 text-[#7A0010] tracking-wide">
            Daftar Peserta LSP
        </h2>

        <form action="{{ route('peserta.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="font-semibold text-[#7A0010]">Nama Lengkap 
                    <span class="text-[#CC0000]">*</span></label>
                <input type="text" name="nama" required
                       class="w-full p-3 rounded-lg border border-[#7A0010]/30 
                              focus:ring-2 focus:ring-[#7A0010]">
            </div>

            <div>
                <label class="font-semibold text-[#7A0010]">Email 
                    <span class="text-[#CC0000]">*</span></label>
                <input type="email" name="email" required
                       class="w-full p-3 rounded-lg border border-[#7A0010]/30 
                              focus:ring-2 focus:ring-[#7A0010]">
            </div>

            <div>
                <label class="font-semibold text-[#7A0010]">No Telepon 
                    <span class="text-[#CC0000]">*</span></label>
                <input type="text" name="telepon" required
                       class="w-full p-3 rounded-lg border border-[#7A0010]/30 
                              focus:ring-2 focus:ring-[#7A0010]">
            </div>

            <div>
                <label class="font-semibold text-[#7A0010]">Jenis Kelamin 
                    <span class="text-[#CC0000]">*</span></label>
                <select name="jenis_kelamin" required
                        class="w-full p-3 rounded-lg border border-[#7A0010]/30 
                               focus:ring-2 focus:ring-[#7A0010]">
                    <option value="">Pilih...</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div>
                <label class="font-semibold text-[#7A0010]">Jurusan 
                    <span class="text-[#CC0000]">*</span></label>
                <input type="text" name="jurusan" required
                       class="w-full p-3 rounded-lg border border-[#7A0010]/30 
                              focus:ring-2 focus:ring-[#7A0010]">
            </div>

            <button type="submit"
                    class="w-full bg-[#7A0010] text-white py-3 rounded-xl text-lg 
                           font-semibold hover:bg-[#5C000B] transition shadow-md">
                Daftar Sekarang
            </button>

        </form>
    </div>

</div>

@endsection
