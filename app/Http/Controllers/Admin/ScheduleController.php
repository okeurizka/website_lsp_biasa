<?php

namespace App\Http\Controllers\Admin;

use App\Models\schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    // Dummy data untuk Jurusan dan Status, agar form bisa jalan.
    private $jurusans = [
        'Teknologi Informasi',
        'Pemasaran Digital',
        'Manajemen Bisnis',
        // Tambahkan jurusan lain di sini
    ];

    private $statuses = [
        'upcoming' => 'Mendatang',
        'ongoing' => 'Sedang Berlangsung',
        'finished' => 'Selesai',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua jadwal terbaru, paginasi 10 per halaman
        $schedules = Schedule::latest()->paginate(10); 
        
        // Pastikan view ada di resources/views/admin/schedules/index.blade.php
        return view('admin.schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusans = $this->jurusans;
        $statuses = $this->statuses;

        // Pastikan view ada di resources/views/admin/schedules/create.blade.php
        return view('admin.schedules.create', compact('jurusans', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validasi Data Jadwal Uji
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'jurusan' => 'required|string|max:100',
            'start_date' => 'required|date',
            // Tanggal akhir harus null atau setelah/sama dengan tanggal mulai
            'end_date' => 'nullable|date|after_or_equal:start_date', 
            'location' => 'nullable|string|max:255',
            'technical_info' => 'nullable|string',
            'requirement_notes' => 'nullable|string',
            'status' => 'required|in:upcoming,ongoing,finished',
        ]);

        // 2. Simpan data ke database
        Schedule::create($validated);

        // 3. Redirect ke halaman index schedules
        return redirect()->route('schedules.index')->with('success', 'Jadwal Uji Kompetensi berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(schedule $schedule)
    {
        // Pastikan view ada di resources/views/admin/schedules/show.blade.php
        return view('admin.schedules.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(schedule $schedule)
    {
        $jurusans = $this->jurusans;
        $statuses = $this->statuses;
        
        // Pastikan view ada di resources/views/admin/schedules/edit.blade.php
        return view('admin.schedules.edit', compact('schedule', 'jurusans', 'statuses'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, schedule $schedule)
    {
                // 1. Validasi Data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'jurusan' => 'required|string|max:100',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date', 
            'location' => 'nullable|string|max:255',
            'technical_info' => 'nullable|string',
            'requirement_notes' => 'nullable|string',
            'status' => 'required|in:upcoming,ongoing,finished',
        ]);

        // 2. Update data
        $schedule->update($validated);

        // 3. Redirect
        return redirect()->route('schedules.index')->with('success', 'Jadwal Uji Kompetensi berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(schedule $schedule)
    {
        // Hapus data
        $schedule->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('schedules.index')->with('success', 'Jadwal berhasil dihapus.');

    }
}