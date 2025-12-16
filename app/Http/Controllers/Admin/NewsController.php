<?php

namespace App\Http\Controllers\Admin;

use App\Models\news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage as FacadesStorage;

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
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan form untuk membuat berita baru
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi data input
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:news,title',
            'content' => 'required|string',
            'category' => 'required|in:berita,pengumuman,jadwal', // Validasi kategori
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // 2. Handle Upload Gambar
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Simpan gambar di folder storage/app/public/news
            $imagePath = $request->file('image')->store('public/news');
            // Ganti path agar bisa diakses publik (storage/news/namafile.jpg)
            $imagePath = str_replace('public/', 'storage/', $imagePath); 
        }

        // 3. Persiapkan data untuk disimpan
        $data = array_merge($validated, [
            'slug' => Str::slug($validated['title']),
            'image_path' => $imagePath, // Tambahkan path gambar
            'published_at' => Carbon::now(), // Set waktu publish
        ]);

        // 4. Simpan data ke database
        News::create($data);

        // 5. Redirect dengan pesan sukses
        return redirect()->route('news.index')->with('success', 'Berita baru berhasil di-publish!');
    }

    /**
     * Display the specified resource.
     */
    public function show(news $news)
    {
        // Tampilkan detail berita
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($newsId)
    {
        // Tampilkan form edit berita
        $news = news::findOrFail($newsId);
        return view('news.edit', compact('news'));    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $newsId)
    {

        $news = news::findOrFail($newsId);
        // 1. Validasi data
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:news,title,' . $news->id,
            'content' => 'required|string',
            'category' => 'required|in:berita,pengumuman,jadwal', // Validasi kategori
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
        ]);

        // 2. Handle Update Gambar (jika ada file baru diupload)
        $imagePath = $news->image_path; // Default: pakai path lama
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
                if ($news->image_path) {
                // Hapus dari folder storage/app/public
                FacadesStorage::delete('public/' . str_replace('storage/', '', $news->image_path)); // <-- GANTI \Storage JADI Storage
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('public/news');
            $imagePath = str_replace('public/', 'storage/', $imagePath);
        }

        // 3. Persiapkan data untuk update
        $data = array_merge($validated, [
            'image_path' => $imagePath,
            'published_at' => $news->published_at ?: Carbon::now(),
        ]);
        
        // Update slug jika judul berubah
        if ($validated['title'] !== $news->title) {
            $data['slug'] = Str::slug($validated['title']);
        }
        
        // 4. Update data
        $news->update($data);

        // 5. Redirect dengan pesan sukses
        return redirect()->route('news.index', $news->slug)->with('success', 'Berita berhasil diupdate!');
    }

    public function destroy($newsId)
    {
        $news = news::findOrFail($newsId);

        // Hapus gambar terkait jika ada
        if ($news->image_path) {
            FacadesStorage::delete('public/' . str_replace('storage/', '', $news->image_path)); // <-- GANTI \Storage JADI Storage
        }
        
        // Hapus data
        $news->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus.');
    }
}