<?php

namespace App\Http\Controllers\Admin;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; // Import untuk file handling

class DocumentController extends Controller
{
    // Dummy data untuk Tipe Dokumen, sesuai dengan Migrasi
    private $types = [
        'formulir' => 'Formulir (APL 01, APL 02)',
        'panduan' => 'Panduan Peserta/Asesor',
        'lainnya' => 'Dokumen Lainnya',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua dokumen terbaru, paginasi 10 per halaman
        $documents = Document::latest()->paginate(10); 
        
        // Pastikan view ada di resources/views/admin/documents/index.blade.php
        return view('admin.documents.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = $this->types;
        
        // Pastikan view ada di resources/views/admin/documents/create.blade.php
        return view('admin.documents.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Data dan File
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            // File wajib, max 10MB, hanya PDF/Word/Excel
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:10240', 
            'type' => 'required|in:formulir,panduan,lainnya',
        ]);

        // 2. Handle File Upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            
            // Simpan file di folder 'public/documents'. 
            // Method 'putFile' akan memberikan nama unik dan mengembalikan path-nya.
            $filePath = $file->store('public/documents'); 

            // Hapus 'public/' dari path agar path bisa diakses via Storage::url()
            $cleanedPath = str_replace('public/', '', $filePath);

            // 3. Simpan data ke database
            Document::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'file_path' => $cleanedPath, // Path penyimpanan relatif
                'file_name' => $file->getClientOriginalName(), // Nama file asli
                'type' => $validated['type'],
            ]);
        }

        // 4. Redirect
        return redirect()->route('documents.index')->with('success', 'Dokumen berhasil diupload dan disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        // Pastikan view ada di resources/views/admin/documents/show.blade.php
        return view('admin.documents.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        $types = $this->types;
        
        // Pastikan view ada di resources/views/admin/documents/edit.blade.php
        return view('admin.documents.edit', compact('document', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        // 1. Validasi Data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            // File tidak wajib saat update, tapi jika diisi, harus memenuhi syarat
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:10240', 
            'type' => 'required|in:formulir,panduan,lainnya',
        ]);
        
        $data = $validated;
        
        // 2. Handle File Update (Jika ada file baru diupload)
        if ($request->hasFile('file')) {
            // A. Hapus file lama dari storage
            Storage::delete('public/' . $document->file_path);

            // B. Upload file baru
            $file = $request->file('file');
            $filePath = $file->store('public/documents');
            $cleanedPath = str_replace('public/', '', $filePath);

            // C. Update data file baru
            $data['file_path'] = $cleanedPath;
            $data['file_name'] = $file->getClientOriginalName();
        }

        // 3. Update data dokumen
        $document->update($data);

        // 4. Redirect
        return redirect()->route('documents.index')->with('success', 'Dokumen berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        // 1. Hapus file dari storage terlebih dahulu
        Storage::delete('public/' . $document->file_path);

        // 2. Hapus data dokumen dari database
        $document->delete();

        // 3. Redirect
        return redirect()->route('documents.index')->with('success', 'Dokumen berhasil dihapus beserta filenya.');
    }
}