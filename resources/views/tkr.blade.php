@extends('layout')

@section('title', 'TKR')

@section('content')

<div class="w-full min-h-screen flex flex-col">

    <!-- Header -->
    <div class="py-20 text-center">
        <h1 class="text-4xl font-bold tracking-wide text-[#800000] uppercase">
            Teknik Kendaraan Ringan Otomotif (TKRO)
        </h1>
        <p class="mt-3 text-lg text-[#800000] opacity-80">
            Kompetensi keahlian yang menyiapkan teknisi otomotif profesional dan siap industri.
        </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 px-6 pb-10 max-w-6xl mx-auto">

        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Itu TKRO?</h2>
            <p class="text-gray-700 leading-relaxed">
                Teknik Kendaraan Ringan Otomotif adalah jurusan yang mempelajari perawatan, perbaikan,
                serta sistem kerja kendaraan bermotor berbahan bakar bensin maupun diesel.
                Siswa dilatih menjadi teknisi terampil yang siap bekerja di industri otomotif modern.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Apa Saja yang Dipelajari?</h2>
            <ul class="list-disc ml-5 text-gray-700 leading-loose">
                <li>Sistem Mesin Otomotif</li>
                <li>Sistem Chassis & Suspensi</li>
                <li>Sistem Kelistrikan Mobil</li>
                <li>Servis & Perawatan Berkala</li>
                <li>Diagnostik Komputer OBD Scanner</li>
                <li>K3 & SOP Bengkel</li>
            </ul>
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#B58A3A]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Prospek Kerja</h2>
            <p class="text-gray-700 leading-relaxed">
                Lulusan TKRO dapat berkarier sebagai teknisi bengkel resmi, mekanik kendaraan diesel,
                teknisi tuning, staf maintenance industri, hingga wirausaha bengkel otomotif modern.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white shadow-lg rounded-xl p-8 border-l-8 border-[#800000]">
            <h2 class="text-2xl font-bold mb-4 text-[#800000]">Karakter yang Dibutuhkan</h2>
            <p class="text-gray-700 leading-relaxed">
                Cocok bagi siswa yang teliti, menyukai otomotif, senang membongkar mesin,
                memiliki logika teknis yang baik, dan disiplin terhadap prosedur kerja.
            </p>
        </div>

    </div>

    <!-- Card Motivasi -->
    <div class="px-6 max-w-6xl mx-auto pb-20">
        <div class="bg-white shadow-lg rounded-xl p-10 border-l-8 border-[#B58A3A]">
            <p class="text-lg text-[#800000] leading-relaxed italic">
                “Perkembangan teknologi otomotif menuntut teknisi yang terampil,
                adaptif, dan bersertifikasi untuk menghadapi industri masa depan.”
            </p>
        </div>
    </div>

</div>

<!-- Sertifikasi -->
<div class="max-w-6xl mx-auto px-6 pb-6">
    <h2 class="text-2xl font-bold text-[#800000] mb-3">
        Skema Sertifikasi KKNI Level II pada Kompetensi Keahlian Teknik Kendaraan Ringan (TKRO)
    </h2>
    <p class="text-gray-700 leading-relaxed">
        Skema ini disusun untuk memastikan peserta mampu melakukan diagnostik,
        perawatan, serta perbaikan kendaraan ringan sesuai standar industri.
    </p>
</div>

<!-- Table -->
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
                    <td class="px-4 py-2 border">TKR.01.001</td>
                    <td class="px-4 py-2 border">Sistem Mesin Otomotif</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">2</td>
                    <td class="px-4 py-2 border">TKR.01.002</td>
                    <td class="px-4 py-2 border">Sistem Kelistrikan Mobil</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">3</td>
                    <td class="px-4 py-2 border">TKR.01.003</td>
                    <td class="px-4 py-2 border">Servis Berkala & Diagnostik OBD</td>
                </tr>
                <tr class="border hover:bg-gray-50">
                    <td class="px-4 py-2 border">4</td>
                    <td class="px-4 py-2 border">TKR.01.004</td>
                    <td class="px-4 py-2 border">K3 & SOP Bengkel</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
