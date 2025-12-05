<?php

namespace App\Http\Controllers\Admin;

use App\Models\scheme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

        private $jurusans = [
        'Teknologi Informasi',
        'Pemasaran Digital',
        'Manajemen Bisnis',
        'Otomotif',
        'Kesehatan',
        'Pariwisata',
    ];

    public function index()
    {
        // Ambil semua data schemes dari database
        // Kita gunakan paginate untuk performance yang lebih baik saat data banyak
        $schemes = Scheme::latest()->paginate(10); 

        // PASTIKAN PATH VIEW PLURAL: 'admin.schemes.index'
        return view('admin.scheme.index', compact('schemes')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Kirim list jurusan ke view
        $jurusans = $this->jurusans; 
        
        // PASTIKAN PATH VIEW PLURAL: 'admin.schemes.create'
        return view('admin.scheme.create', compact('jurusans'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi data
        $validated = $request->validate([
            'code' => 'required|string|max:50|unique:scheme,code', // Wajib unik
            'name' => 'required|string|max:255',
            'jurusan' => 'required|string|max:100',
            'description' => 'required|string',
            'sasaran' => 'nullable|string',
            'tujuan' => 'nullable|string',
            // Validasi unit kompetensi sebagai array dan setiap itemnya string
            'unit_kompetensi_list' => 'required|array|min:1',
            'unit_kompetensi_list.*' => 'required|string|max:500', 
        ]);

        // 2. Pre-processing Unit Kompetensi
        // Bersihkan array: hapus nilai kosong dan ambil nilai yang unik (jika ada duplikasi)
        $cleanUnits = array_unique(array_filter($request->unit_kompetensi_list));
        
        // 3. Simpan data ke database
        Scheme::create([
            'code' => $validated['code'],
            'name' => $validated['name'],
            'jurusan' => $validated['jurusan'],
            'description' => $validated['description'],
            'sasaran' => $validated['sasaran'],
            'tujuan' => $validated['tujuan'],
            // Simpan unit kompetensi sebagai JSON string
            'unit_kompetensi_list' => json_encode($cleanUnits), 
            'slug' => Str::slug($validated['name'] . '-' . $validated['code']), // Tambahkan slug
        ]);

        // 4. Redirect
        return redirect()->route(route: 'schemes.index')->with('success', 'Skema baru berhasil ditambahkan, mantap!');
    }

    /**
     * Display the specified resource.
     */
    public function show(scheme $scheme)
    {
        // Tampilkan detail scheme
        // PASTIKAN PATH VIEW PLURAL: 'admin.schemes.show'
        return view('admin.scheme.show', compact('scheme')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(scheme $scheme)
    {
        // Kirim list jurusan ke view
        $jurusans = $this->jurusans; 
        
        // PASTIKAN PATH VIEW PLURAL: 'admin.schemes.edit'
        return view('admin.scheme.edit', data: compact('scheme', 'jurusans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, scheme $scheme)
    {
        // 1. Validasi data
        $validated = $request->validate([
            // Kode unik, tapi abaikan kode skema saat ini ($scheme->id)
            'code' => 'required|string|max:50|unique:scheme,code,' . $scheme->id, 
            'name' => 'required|string|max:255',
            'jurusan' => 'required|string|max:100',
            'description' => 'required|string',
            'sasaran' => 'nullable|string',
            'tujuan' => 'nullable|string',
            'unit_kompetensi_list' => 'required|array|min:1',
            'unit_kompetensi_list.*' => 'required|string|max:500',
        ]);

        // 2. Pre-processing Unit Kompetensi
        $cleanUnits = array_unique(array_filter($request->unit_kompetensi_list));

        // 3. Update data
        $scheme->update([
            'code' => $validated['code'],
            'name' => $validated['name'],
            'jurusan' => $validated['jurusan'],
            'description' => $validated['description'],
            'sasaran' => $validated['sasaran'],
            'tujuan' => $validated['tujuan'],
            'unit_kompetensi_list' => json_encode($cleanUnits), // Simpan sebagai JSON string
            'slug' => Str::slug($validated['name'] . '-' . $validated['code']),
        ]);

        // 4. Redirect
        return redirect()->route('schemes.index')->with('success', 'Skema berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(scheme $scheme)
    {
        // Hapus data
        $scheme->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('schemes.index')->with('success', 'Skema berhasil dihapus.');
    }
}