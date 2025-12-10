@extends('layout')

@section('title', 'DKV')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">Desain Komunikasi Visual (DKV)</h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Jurusan yang berfokus pada seni, kreativitas, media visual, dan komunikasi melalui desain.
        </p>
    </div>

    <!-- Content -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">
        
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-yellow-500">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa itu DKV?</h2>
            <p class="leading-relaxed text-gray-700">
                DKV adalah jurusan yang mempelajari cara menyampaikan pesan atau informasi melalui media visual.
                Siswa belajar menggabungkan seni, teknologi, dan komunikasi untuk menghasilkan karya kreatif
                seperti poster, logo, ilustrasi, animasi, hingga desain multimedia.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa yang Dipelajari?</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Desain Grafis</li>
                <li>Fotografi & Videografi</li>
                <li>Ilustrasi Digital</li>
                <li>Branding & Logo Design</li>
                <li>Motion Graphic & Animasi</li>
                <li>Software Editing (Adobe Photoshop, Illustrator, Premiere, After Effects)</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-yellow-500">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Peluang Kerja</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Graphic Designer</li>
                <li>Content Creator / Social Media Designer</li>
                <li>Animator / Motion Designer</li>
                <li>Videographer & Editor</li>
                <li>Illustrator</li>
                <li>Branding & Creative Consultant</li>
            </ul>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Kenapa Memilih DKV?</h2>
            <p class="leading-relaxed text-gray-700">
                ✔ Cocok untuk yang suka seni & kreativitas<br>
                ✔ Banyak proyek freelance dan peluang kerja mandiri<br>
                ✔ Bisa bekerja di industri media, periklanan, film, dan entertainment<br>
                ✔ Portofolio lebih penting daripada ijazah — hasil karya menentukan peluang<br>
                ✔ Jurusan dengan perkembangan pesat di era digital
            </p>
        </div>
    </div>

    <!-- Card 5 (Motivasi) -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-yellow-500">
            <p class="text-lg text-[#800000] leading-relaxed italic">
                “DKV bukan hanya tentang menggambar. Ini tentang menyampaikan pesan, membangun identitas,
                dan menciptakan visual yang memiliki makna. Kreativitasmu adalah kekuatanmu.”
            </p>
        </div>
    </div>

</div>

<!-- SKEMA DKV -->
<div class="max-w-6xl mx-auto px-6 pb-6 mt-10">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Desain Komunikasi Visual (DKV)
    </h2>

    <p class="text-gray-700 leading-relaxed">
        Skema ini dibuat untuk memenuhi standar industri kreatif seperti percetakan, branding, advertising, 
        dan multimedia. Kompetensi yang dinilai mencakup kemampuan desain grafis, ilustrasi digital, 
        pembuatan layout publikasi, editing foto hingga pembuatan konten digital untuk media sosial.
        <br><br>
        Melalui skema ini, lulusan DKV diharapkan mampu bersaing di dunia industri kreatif dengan 
        portofolio profesional yang memenuhi standar perusahaan dan freelance internasional.
    </p>
</div>

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
        <tr><td class="border px-4 py-2">1</td><td class="border px-4 py-2">DKV.01.001</td><td class="border px-4 py-2">Dasar Desain Grafis</td></tr>
        <tr><td class="border px-4 py-2">2</td><td class="border px-4 py-2">DKV.01.002</td><td class="border px-4 py-2">Editing Foto & Manipulasi Gambar</td></tr>
        <tr><td class="border px-4 py-2">3</td><td class="border px-4 py-2">DKV.01.003</td><td class="border px-4 py-2">Layout Konten Publikasi</td></tr>
        <tr><td class="border px-4 py-2">4</td><td class="border px-4 py-2">DKV.01.004</td><td class="border px-4 py-2">Branding & Logo Design</td></tr>
        <tr><td class="border px-4 py-2">5</td><td class="border px-4 py-2">DKV.01.005</td><td class="border px-4 py-2">Produksi Konten Digital</td></tr>
      </tbody>
    </table>
  </div>
</div>

@endsection