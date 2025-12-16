@extends('layout')

@section('title', $news->title)

@section('content')
    <div class="min-h-screen bg-gray-50 px-4 py-10">

        <article class="max-w-4xl mx-auto">

            <div class="flex justify-between items-center mb-6">
                <a href="{{ route('news.index') }}"
                    class="text-gray-600 hover:text-gray-800 font-semibold transition duration-150 flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Daftar Berita
                </a>

                <div class="space-x-2">

                    <a href="{{ route('news.edit', $news->id) }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 text-sm">
                        Edit
                    </a>

                    <form action="{{ route('news.destroy', $news->id) }}" method="POST" class="inline-block"
                        onsubmit="return confirm('Serius nih mau HAPUS permanen berita: {{ $news->title }}? Data akan hilang!');">
                        @csrf
                        @method('DELETE') <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-300 text-sm">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>

            <section class="bg-white rounded-2xl shadow-xl p-6 lg:p-10">

                <header class="mb-6 border-b pb-4">
                    <h1 class="text-3xl md:text-4xl font-extrabold text-[#660000] mb-2">{{ $news->title }}</h1>
                    <div class="flex flex-wrap gap-x-4 gap-y-2 text-sm text-gray-500">
                        <span class="inline-block">
                            <i class="fas fa-calendar-alt mr-1"></i>
                            Dipublikasikan: **{{ \Carbon\Carbon::parse($news->published_at)->translatedFormat('d F Y') }}**
                        </span>
                        <span
                            class="inline-block text-xs font-semibold text-yellow-700 border border-yellow-400 rounded-full px-3 py-0.5 bg-yellow-50">
                            Kategori: {{ strtoupper($news->category) }}
                        </span>
                    </div>
                </header>

                @if ($news->image_path)
                    <figure class="mb-8 overflow-hidden rounded-xl shadow-lg">
                        <img src="{{ asset($news->image_path) }}" alt="Gambar {{ $news->title }}"
                            class="w-full h-auto object-cover max-h-[400px]">
                    </figure>
                @endif

                <div class="prose max-w-none text-gray-800 leading-relaxed pt-4">
                    <p>{!! nl2br(e($news->content)) !!}</p>
                </div>

            </section>
        </article>
    </div>
@endsection
