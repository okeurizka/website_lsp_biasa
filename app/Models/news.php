<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    /**
     * The attributes that are mass assignable.
     * Daftar kolom yang boleh diisi melalui mass assignment (News::create atau $news->update)
     * Ini penting agar NewsController dapat menyimpan data dari form.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'category',
        'image_path',
        'published_at',
    ];
}