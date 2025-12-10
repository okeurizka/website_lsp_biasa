<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaLsp extends Model
{
    protected $table = 'peserta_lsp';

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'jenis_kelamin',
        'jurusan',
    ];
}