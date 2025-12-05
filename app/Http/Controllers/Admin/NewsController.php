<?php

namespace App\Http\Controllers\Admin;

use App\Models\news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                // Ambil semua data berita terbaru
        $news = News::latest()->get();

        // Tampilkan view index berita di folder admin
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan form untuk membuat berita baru
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi data input
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:news,title', // Judul unik
            'content' => 'required|string',
            // Jika ada gambar/thumbnail, tambahkan: 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // 2. Buat slug dari judul
        $validated['slug'] = Str::slug($validated['title']);

        // 3. Simpan data ke database
        News::create($validated);

        // 4. Redirect dengan pesan sukses
        return redirect()->route('news.index')->with('success', 'Berita baru berhasil di-publish!');
    }

    /**
     * Display the specified resource.
     */
    public function show(news $news)
    {
        // Tampilkan detail berita
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(news $news)
    {
        // Tampilkan form edit berita
        return view('admin.news.edit', compact('news'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, news $news)
    {
        // 1. Validasi data
        $validated = $request->validate([
            // Abaikan unique title untuk berita saat ini
            'title' => 'required|string|max:255|unique:news,title,' . $news->id,
            'content' => 'required|string',
        ]);

        // 2. Update slug jika judul berubah
        if ($validated['title'] !== $news->title) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // 3. Update data
        $news->update($validated);

        // 4. Redirect dengan pesan sukses
        return redirect()->route('news.index')->with('success', 'Berita berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(news $news)
    {
        // Hapus data
        $news->delete();

        // Redirect dengan pesan sukses
        return redirect()->route(route: 'news.index')->with('success', 'Berita berhasil dihapus.');
    }
}