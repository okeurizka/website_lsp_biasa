@extends('layout')

@section('title', 'Berita Terkini')

@section('content')
    <div class="min-h-screen bg-gray-50 px-4 py-6">

        <div class="flex justify-end mb-4">
            <a href="{{ route('news.create') }}"
                class="bg-[#660000] hover:bg-[#800000] text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300">
                + Tambah Berita Baru
            </a>
        </div>

        <section class="relative h-80 rounded-xl overflow-hidden mb-8">
            <img src="{{ asset('images/smkpws.png') }}" alt="Hero"
                class="absolute w-full h-full object-cover filter blur-sm brightness-50">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-center px-4">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-2">Berita Terkini</h1>
                <p class="text-md md:text-lg text-gray-200 max-w-2xl">Update terbaru seputar kegiatan dan informasi penting
                    lainnya.</p>
            </div>
        </section>

        <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @forelse ($news as $item)
                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                    <div class="relative">
                        <img src="{{ asset($item->image_path ?: 'images/default.png') }}" alt="{{ $item->title }}"
                            class="w-full h-56 object-cover">

                        <span
                            class="absolute top-3 right-3 bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded-full italic">
                            {{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}
                        </span>
                    </div>
                    <div class="p-5">
                        <span
                            class="inline-block mb-2 text-xs font-semibold text-yellow-700 border border-yellow-400 rounded-full px-3 py-0.5 bg-yellow-50">
                            {{ strtoupper($item->category) }}
                        </span>
                        <h3 class="text-2xl font-bold text-[#660000] mb-2 hover:text-[#800000] transition-colors">
                            {{ $item->title }}
                        </h3>
                        <p class="text-gray-700 mb-4">{{ Str::limit($item->content, 150) }}</p>

                        <a href="{{ route('news.show', $item->slug) }}"
                            class="text-yellow-600 font-semibold hover:underline">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            @empty
                <p class="col-span-full text-center text-gray-600 p-8">Belum ada berita yang di-publish nih, coba bikin
                    satu!</p>
            @endforelse

        </main>

        @if (app()->environment('local') && !file_exists(public_path('storage')))
            <div class="fixed bottom-0 left-0 right-0 bg-red-100 border-t-4 border-red-500 text-red-700 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34l11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg></div>
                    <div>
                        <p class="font-bold">Peringatan: Storage Link Belum Ada</p>
                        <p class="text-sm">Gambar tidak akan muncul. Jalanin <code>php artisan storage:link</code> di
                            terminal lo!</p>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection

{{-- <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 hover:shadow-2xl transition-all duration-300">
                <div class="relative">
                    <img src="{{ asset('images/smkpws.png') }}" alt="Berita 3" class="w-full h-56 object-cover">
                    <span
                        class="absolute top-3 right-3 bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-1 rounded-full italic">08
                        Des 2025</span>
                </div>
                <div class="p-5">
                    <span
                        class="inline-block mb-2 text-xs font-semibold text-yellow-700 border border-yellow-400 rounded-full px-3 py-0.5 bg-yellow-50">BARU</span>
                    <h3 class="text-2xl font-bold text-[#660000] mb-2 hover:text-[#800000] transition-colors">Judul Berita
                        Ketiga</h3>
                    <p class="text-gray-700 mb-4">Ringkasan berita singkat agar pembaca tahu inti dari berita tersebut
                        dengan menarik dan jelas.</p>
                    <a href="#" class="text-yellow-600 font-semibold hover:underline">Baca Selengkapnya →</a>
                </div>
            </div> --}}
