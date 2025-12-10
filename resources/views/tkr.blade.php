@extends('layout')

@section('title', 'TKR')

@section('content')

<div class="container mx-auto px-6 py-10">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-[#800000] text-center mb-10">
        Teknik Kendaraan Ringan Otomotif (TKRO)
    </h1>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Itu TKRO?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknik Kendaraan Ringan Otomotif adalah jurusan yang mempelajari perawatan, perbaikan, 
                serta sistem kerja kendaraan bermotor seperti mobil berbahan bakar bensin atau diesel. 
                Siswa dilatih menjadi teknisi yang terampil dan siap bekerja di industri otomotif modern.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Apa Saja yang Dipelajari?</h2>
            <ul class="text-gray-700 space-y-2">
                <li>🚗 Sistem Mesin Otomotif</li>
                <li>⚙️ Sistem Chassis & Suspensi</li>
                <li>🔋 Sistem Kelistrikan Mobil</li>
                <li>🛠️ Servis & Perawatan Berkala</li>
                <li>🔧 Diagnostik Komputer OBD Scanner</li>
                <li>🧪 Keselamatan Kerja (K3) & SOP Bengkel</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan TKRO dapat berkarir sebagai teknisi bengkel resmi (Toyota, Mitsubishi, Honda), 
                mekanik kendaraan diesel, perakit kendaraan, teknisi tuning, staf maintenance industri, 
                hingga wirausaha bengkel otomotif modern.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-lg p-6 border-t-4 border-[#B58A3A]">
            <h2 class="text-2xl font-semibold text-[#800000] mb-3">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Jurusan ini cocok bagi siswa yang teliti, suka otomotif, senang membongkar mesin, 
                memiliki logika teknis yang baik, serta disiplin mengikuti standar prosedur kerja.
            </p>
        </div>
    </div>

    <!-- Extra Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 border-t-4 border-[#B58A3A] mt-10">
        <p class="text-gray-700 text-lg leading-relaxed">
            "Teknologi otomotif terus berkembang menuju sistem pintar dan ramah lingkungan.
            Dengan kompetensi yang tepat, lulusan TKRO memiliki peluang besar menjadi tenaga 
            profesional yang dibutuhkan industri otomotif modern."
        </p>
    </div>

</div>

<div class="max-w-6xl mx-auto px-6 pb-6 mt-10">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Teknik Kendaraan Ringan (TKRO)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini disusun untuk memastikan peserta mampu melakukan diagnostik, perawatan, 
        serta perbaikan sistem kendaraan ringan berbahan bakar bensin maupun diesel sesuai standar industri.
    </p>
</div>

<div class="max-w-6xl mx-auto px-6 pb-20">
<table class="min-w-full bg-white border border-gray-200">
<thead class="bg-[#B58A3A] text-white">
<tr>
<th class="px-4 py-2 border">No</th>
<th class="px-4 py-2 border">Kode Unit</th>
<th class="px-4 py-2 border">Judul Unit Kompetensi</th>
</tr>
</thead>
<tbody class="text-gray-700">

<tr><td class="px-4 py-2 border">1</td><td class="px-4 py-2 border">TKR.01.001</td><td class="px-4 py-2 border">Sistem Mesin Otomotif</td></tr>
<tr><td class="px-4 py-2 border">2</td><td class="px-4 py-2 border">TKR.01.002</td><td class="px-4 py-2 border">Sistem Kelistrikan Mobil</td></tr>
<tr><td class="px-4 py-2 border">3</td><td class="px-4 py-2 border">TKR.01.003</td><td class="px-4 py-2 border">Servis Berkala dan Diagnostik OBD</td></tr>
<tr><td class="px-4 py-2 border">4</td><td class="px-4 py-2 border">TKR.01.004</td><td class="px-4 py-2 border">K3 dan Standar SOP Bengkel</td></tr>

</tbody>
</table>
</div>

@endsection
