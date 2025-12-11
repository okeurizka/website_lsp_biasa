@extends('layout')

@section('title', 'Edit Berita: ' . $news->title)

@section('content')
    <div class="min-h-screen bg-gray-50 px-4 py-10">

        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-6 lg:p-10">

            <header class="mb-8 border-b pb-4 flex justify-between items-center">
                <h1 class="text-3xl font-extrabold text-[#660000]">Edit Berita</h1>
                <a href="{{ route('news.show', $news->slug) }}"
                    class="text-sm text-gray-600 hover:text-gray-800 font-semibold transition duration-150">
                    ← Kembali ke Detail Berita
                </a>
            </header>

            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <div class="mb-5">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Berita</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $news->title) }}"
                        class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-yellow-500 focus:ring-yellow-500 p-3 @error('title') border-red-500 @enderror"
                        placeholder="Masukkan judul berita yang menarik" required>
                    @error('title')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                    <select id="category" name="category" required
                        class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-yellow-500 focus:ring-yellow-500 p-3 @error('category') border-red-500 @enderror">

                        @php
                            // Ambil nilai lama (old) atau nilai saat ini ($news->category)
                            $selectedCategory = old('category', $news->category);
                        @endphp

                        <option value="">Pilih Kategori</option>
                        <option value="berita" {{ $selectedCategory == 'berita' ? 'selected' : '' }}>Berita</option>
                        <option value="pengumuman" {{ $selectedCategory == 'pengumuman' ? 'selected' : '' }}>Pengumuman
                        </option>
                        <option value="jadwal" {{ $selectedCategory == 'jadwal' ? 'selected' : '' }}>Jadwal</option>
                    </select>
                    @error('category')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5 border p-4 rounded-lg bg-gray-50">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Ganti Gambar Thumbnail
                        (Opsional)</label>

                    @if ($news->image_path)
                        <div class="mb-3">
                            <p class="text-xs text-gray-600 mb-1">Gambar saat ini:</p>
                            <img src="{{ asset($news->image_path) }}" alt="Gambar Lama"
                                class="w-full max-h-48 object-cover rounded-lg shadow-md">
                        </div>
                    @endif

                    <input type="file" id="image" name="image" accept="image/*"
                        class="mt-1 block w-full text-gray-700 border border-gray-300 rounded-lg shadow-sm bg-white file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0 file:text-sm file:font-semibold
                                  file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100 @error('image') border-red-500 @enderror">
                    @error('image')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-2">Biarkan kosong jika tidak ingin mengganti gambar.</p>
                </div>

                <div class="mb-6">
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Isi Konten Berita</label>
                    <textarea id="content" name="content" rows="10"
                        class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:border-yellow-500 focus:ring-yellow-500 p-3 @error('content') border-red-500 @enderror"
                        placeholder="Tulis isi berita lengkap di sini..." required>{{ old('content', $news->content) }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition duration-300">
                        Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
