<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>@yield('title') - LSP SMKN 1 Purwosari</title>
<script src="https://cdn.tailwindcss.com"></script>

<style>
  /* Colors */
  .bg-maroon { background-color: #8B0000; }
  .text-maroon { color: #8B0000; }
  .text-gold { color: #D4AF37; }

  /* Text gradient maroon -> gold */
  .text-gradient {
    background: linear-gradient(90deg,#8B0000,#D4AF37);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

</style>
</head>

<body class="bg-white">

<!-- NAVBAR (keamanan: dropdown di-hover & link clickable) -->
  <nav class="bg-maroon shadow-md fixed top-0 w-full text-white z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <!-- logo -->
      <div class="flex items-center gap-3">
        <img src="{{ asset('images/logo-fix.png') }}" alt="logo" class="w-11 h-11">
        <div>
          <div class="text-gold font-bold">LSP SMKN 1 Purwosari</div>
          <div class="text-xs text-white/80">Lembaga Sertifikasi Profesi</div>
        </div>
      </div>

      <!-- menu -->
      <div class="flex items-center gap-6 font-medium">
        <a href="/" class="hover:text-gold transition">Home</a>

        <!-- PROFIL dropdown (keamanan: group + dropdown-menu absolute) -->
        <div class="relative group">
          <a href="/profil" class="flex items-center gap-1 hover:text-gold transition">
            Profil <span class="text-sm">▼</span>
          </a>

          <div class="dropdown-menu absolute right-0 mt-3 bg-white text-black rounded-md shadow-lg opacity-0 pointer-events-none transform scale-95 transition-all duration-200 group-hover:opacity-100 group-hover:pointer-events-auto group-hover:scale-100">
            <a href="/profil/visi-misi" class="block px-4 py-2 hover:bg-gray-100">Visi & Misi</a>
            <a href="/profil/struktur" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a>
            <a href="/profil/alur-uji" class="block px-4 py-2 hover:bg-gray-100">Alur Uji Kompetensi</a>
          </div>
        </div>

        <!-- S K E M A dropdown -->
        <div class="relative group">
          <button class="flex items-center gap-1 hover:text-gold transition">
            Daftar Skema Sertifikasi <span class="text-sm">▼</span>
          </button>
          <div class="dropdown-menu absolute right-0 mt-3 bg-white text-black rounded-md shadow-lg opacity-0 pointer-events-none transform scale-95 transition-all duration-200 group-hover:opacity-100 group-hover:pointer-events-auto group-hover:scale-100 w-64 max-h-72 overflow-y-auto">
            <a href="/rpl" class="block px-4 py-2 hover:bg-gray-100">Rekayasa Perangkat Lunak</a>
            <a href="/tkj" class="block px-4 py-2 hover:bg-gray-100">Teknik Komputer & Jaringan</a>
            <a href="/dkv" class="block px-4 py-2 hover:bg-gray-100">Desain Komunikasi Visual</a>
            <a href="/mkt" class="block px-4 py-2 hover:bg-gray-100">Teknik Mekatronik</a>
            <a href="/tpm" class="block px-4 py-2 hover:bg-gray-100">Teknik Pemesinan</a>
            <a href="/tl" class="block px-4 py-2 hover:bg-gray-100">Teknik Pengelasan</a>
            <a href="/tkr" class="block px-4 py-2 hover:bg-gray-100">Teknik Kendaraan Ringan</a>
            <a href="/tbkr" class="block px-4 py-2 hover:bg-gray-100">Teknik Bodi Kendaraan Ringan</a>
            <a href="/aphp" class="block px-4 py-2 hover:bg-gray-100">Agribisnis Pengolahan Hasil Pertanian</a>
            <a href="/atph" class="block px-4 py-2 hover:bg-gray-100">Agribisnis Tanaman Pangan & Hortikultura</a>
          </div>
        </div>

        <a href="/hubungi-kami" class="hover:text-gold transition">Hubungi Kami</a>

        <!-- auth -->
        <div class="flex items-center gap-3">
          <a href="/daftar" class="px-4 py-2 rounded bg-gradient-to-r from-[#D4AF37] to-[#F3E18C] text-[#8B0000] font-semibold">Daftar</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- spacer for fixed navbar -->
  <div class="h-[76px]"></div>


  <!-- MAIN CONTENT -->
  <main>
    @yield('content')
</main>

<footer class="py-12" style="background-color: #800000; color: white;">
  <div class="container mx-auto px-6 md:px-12">

    <div class="flex flex-col md:flex-row justify-between items-start md:items-start space-y-8 md:space-y-0 md:space-x-12">

      <!-- Kiri: Logo -->
      <div class="flex-shrink-0">
        <img src="{{ asset('images/smk-hebat.png') }}" alt="Logo SMK Hebat" class="w-36 h-auto">
      </div>

      <!-- Tengah: Alamat / Kontak -->
      <div class="text-white text-base space-y-1 md:flex-1">
        <p>Jl. Raya Purwosari No. 1, Kec. Purwosari, Kab. Pasuruan, Jawa Timur 67162</p>
        <p>Telp: (0343) 613747</p>
        <p>Email: info@smkn1purwosari.sch.id</p>
      </div>

      <!-- Kanan: Navigasi + Media Sosial -->
      <div class="flex flex-col items-start md:items-end space-y-4">
        <!-- Navigasi menyamping -->
        <div class="flex space-x-6 text-white text-lg font-semibold">
          <a href="/" class="hover:underline">Beranda</a>
          <a href="/hubungi-kami" class="hover:underline">Hubungi Kami</a>
          <a href="/berita-terkini" class="hover:underline">Berita Terkini</a>
        </div>

        <!-- Media Sosial horizontal di bawah navigasi -->
        <div class="flex space-x-4 mt-2">
          <img src="{{ asset('images/fb.png') }}" alt="Facebook" class="w-12 h-12">
          <img src="{{ asset('images/ig.png') }}" alt="Instagram" class="w-12 h-12">
          <img src="{{ asset('images/wa.png') }}" alt="WhatsApp" class="w-12 h-12">
          <img src="{{ asset('images/yt.png') }}" alt="YouTube" class="w-12 h-12">
        </div>
      </div>

    </div>
    
  </div>
</footer>

</body>
</html>
