<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class scheme extends Model
{

    /**
     * The attributes that are mass assignable.
     * Daftar kolom yang boleh diisi melalui mass assignment (Scheme::create atau $scheme->update)
     * Ini penting agar SchemeController dapat menyimpan data dari form.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'name',
        'jurusan',
        'description',
        'sasaran',
        'tujuan',
        'unit_kompetensi_list', // List unit kompetensi yang disimpan sebagai JSON
        'slug',
    ];

    /**
     * The attributes that should be cast to native types.
     * Mengatur konversi tipe data otomatis.
     * unit_kompetensi_list disimpan sebagai TEXT/JSON di DB, tapi dibaca sebagai array di PHP.
     *
     * @var array
     */
    protected $casts = [
        'unit_kompetensi_list' => 'array',
    ];
}