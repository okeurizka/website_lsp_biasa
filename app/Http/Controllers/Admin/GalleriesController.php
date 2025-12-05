<?php

namespace App\Http\Controllers\Admin;

use App\Models\Galleries; // Diubah ke singular (Galleries)
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; // Import untuk file handling

class GalleriesController extends Controller
{
    // Dummy data untuk Jurusan, agar form bisa jalan.
    private $jurusans = [
        'Teknologi Informasi',
        'Pemasaran Digital',
        'Manajemen Bisnis',
        // Tambahkan jurusan lain di sini
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua foto terbaru, paginasi 12 per halaman
        $galleries = Galleries::latest()->paginate(12); 
        
        // Pastikan view ada di resources/views/admin/galleries/index.blade.php
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusans = $this->jurusans;

        // Pastikan view ada di resources/views/admin/galleries/create.blade.php
        return view('admin.galleries.create', compact('jurusans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Data dan File (Gambar)
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'jurusan' => 'nullable|string|max:100',
            // Gambar wajib, max 5MB, hanya format umum (jpg, png, jpeg)
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', 
        ]);

        // 2. Handle File Upload (Gambar)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            
            // Simpan file di folder 'public/galleries'. 
            $imagePath = $image->store('public/galleries'); 

            // Hapus 'public/' dari path agar path bisa diakses via URL
            $cleanedPath = str_replace('public/', '', $imagePath);

            // 3. Simpan data ke database
            Galleries::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'image_path' => $cleanedPath, // Path penyimpanan relatif
                'image_name' => $image->getClientOriginalName(), // Nama file asli
                'jurusan' => $validated['jurusan'],
            ]);
        }

        // 4. Redirect
        return redirect()->route('galleries.index')->with('success', 'Foto berhasil diupload ke Galeri.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galleries $gallery) // Diubah ke singular (Galleries $gallery)
    {
        // Pastikan view ada di resources/views/admin/galleries/show.blade.php
        return view('admin.galleries.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galleries $gallery) // Diubah ke singular (Galleries $gallery)
    {
        $jurusans = $this->jurusans;
        
        // Pastikan view ada di resources/views/admin/galleries/edit.blade.php
        return view('admin.galleries.edit', compact('gallery', 'jurusans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galleries $gallery) // Diubah ke singular (Galleries $gallery)
    {
        // 1. Validasi Data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'jurusan' => 'nullable|string|max:100',
            // Gambar tidak wajib saat update, tapi jika diisi, harus memenuhi syarat
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', 
        ]);
        
        $data = $validated;
        
        // 2. Handle File Update (Jika ada file baru diupload)
        if ($request->hasFile('image')) {
            // A. Hapus file lama dari storage (jika ada)
            if ($gallery->image_path) {
                Storage::delete('public/' . $gallery->image_path);
            }

            // B. Upload file baru
            $image = $request->file('image');
            $imagePath = $image->store('public/galleries');
            $cleanedPath = str_replace('public/', '', $imagePath);

            // C. Update data file baru
            $data['image_path'] = $cleanedPath;
            $data['image_name'] = $image->getClientOriginalName();
        }
        
        // Hapus image dari data karena sudah di-handle di atas
        unset($data['image']);

        // 3. Update data galeri
        $gallery->update($data);

        // 4. Redirect
        return redirect()->route('galleries.index')->with('success', 'Foto Galeri berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galleries $gallery) // Diubah ke singular (Galleries $gallery)
    {
        // 1. Hapus file dari storage terlebih dahulu
        if ($gallery->image_path) {
            Storage::delete('public/' . $gallery->image_path);
        }

        // 2. Hapus data dari database
        $gallery->delete();

        // 3. Redirect
        return redirect()->route('galleries.index')->with('success', 'Foto Galeri berhasil dihapus.');
    }
}