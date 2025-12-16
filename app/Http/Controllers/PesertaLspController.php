<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertaLsp;

class PesertaLspController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:peserta_lsp',
            'telepon' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
        ]);

        PesertaLsp::create($validated);

        return redirect()->route('home')->with('success', 'Pendaftaran berhasil!');
    }
}