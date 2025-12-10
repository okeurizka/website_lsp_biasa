@extends('layout')

@section('title', 'RPL')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">Rekayasa Perangkat Lunak (RPL)</h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Jurusan teknologi masa depan yang mempersiapkan siswa menjadi ahli perangkat lunak profesional.
        </p>
    </div>

    <!-- Content -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">
        
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-yellow-500">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa itu RPL?</h2>
            <p class="leading-relaxed text-gray-700">
                RPL adalah bidang yang fokus pada pembuatan perangkat lunak mulai dari desain, pengembangan,
                pengujian, hingga pemeliharaan. Siswa dilatih untuk menjadi developer software yang kreatif,
                kritis, dan siap kerja.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa yang Dipelajari?</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Pemrograman Web (HTML, CSS, JS, Vue, Laravel)</li>
                <li>Pemrograman Mobile (Flutter/Kotlin)</li>
                <li>Database (MySQL, PostgreSQL, Firebase)</li>
                <li>Version Control (Git & GitHub)</li>
                <li>Desain UI/UX</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-yellow-500">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Peluang Kerja</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Software Developer</li>
                <li>Backend / Frontend Engineer</li>
                <li>Quality Assurance (QA Tester)</li>
                <li>Game Developer</li>
                <li>UI/UX Designer</li>
                <li>IT Consultant</li>
            </ul>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Kenapa Memilih RPL?</h2>
            <p class="leading-relaxed text-gray-700">
                ✔ Banyak peluang kerja<br>
                ✔ Bisa bekerja secara remote<br>
                ✔ Bisa membangun aplikasi sendiri<br>
                ✔ Prospek karir global<br>
                ✔ Bisa freelance atau buat startup
            </p>
        </div>
    </div>

    <!-- Card 5 (Motivasi) -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-yellow-500">
            <p class="text-lg text-[#800000] leading-relaxed italic">
                “Di RPL, kamu tidak hanya belajar coding. Kamu belajar menciptakan sesuatu yang bermanfaat,
                memecahkan masalah dengan teknologi, dan membangun masa depan yang lebih modern.”
            </p>
        </div>
    </div>

</div>

<div class="max-w-6xl mx-auto px-6 pb-6">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Rekayasa Perangkat Lunak (RPL)
    </h2>

    <p class="text-gray-700 leading-relaxed">
        Skema Sertifikasi ini disusun berdasarkan standar kompetensi kerja bidang Rekayasa Perangkat Lunak 
        yang mengacu pada Kurikulum Nasional dan kebutuhan dunia kerja di bidang Teknologi Informasi. 
        Skema ini bertujuan untuk memastikan peserta didik menguasai kemampuan teknis dalam pengembangan 
        perangkat lunak, mulai dari pemrograman dasar, desain antarmuka, pengelolaan basis data, 
        hingga pengujian dan publikasi aplikasi.
        <br><br>
        Dengan adanya Skema Sertifikasi ini, siswa diharapkan siap menghadapi dunia kerja, industri startup, 
        maupun sertifikasi lanjutan profesional berbasis teknologi. Unit kompetensi yang tercantum menjadi dasar 
        penilaian bagi Asesor Kompetensi pada proses Uji Kompetensi LSP.
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
        <tr class="border hover:bg-gray-50">
          <td class="px-4 py-2 border">1</td>
          <td class="px-4 py-2 border">RPL.01.001</td>
          <td class="px-4 py-2 border">Menulis Program Dasar</td>
        </tr>
        <tr class="border hover:bg-gray-50">
          <td class="px-4 py-2 border">2</td>
          <td class="px-4 py-2 border">RPL.01.002</td>
          <td class="px-4 py-2 border">Menggunakan Struktur Data & Algoritma</td>
        </tr>
        <tr class="border hover:bg-gray-50">
          <td class="px-4 py-2 border">3</td>
          <td class="px-4 py-2 border">RPL.01.003</td>
          <td class="px-4 py-2 border">Develop & Desain UI/UX Web</td>
        </tr>
        <tr class="border hover:bg-gray-50">
          <td class="px-4 py-2 border">4</td>
          <td class="px-4 py-2 border">RPL.01.004</td>
          <td class="px-4 py-2 border">Database & Backend Development</td>
        </tr>
        <tr class="border hover:bg-gray-50">
          <td class="px-4 py-2 border">5</td>
          <td class="px-4 py-2 border">RPL.01.005</td>
          <td class="px-4 py-2 border">Testing & Debugging Aplikasi</td>
        </tr>
        <tr class="border hover:bg-gray-50">
          <td class="px-4 py-2 border">6</td>
          <td class="px-4 py-2 border">RPL.01.006</td>
          <td class="px-4 py-2 border">Deploy & Dokumentasi Aplikasi</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection