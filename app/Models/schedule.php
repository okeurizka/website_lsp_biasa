<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'jurusan',
        'start_date',
        'end_date',
        'location',
        'technical_info',
        'requirement_notes',
        'status',
    ];

    /**
     * The attributes that should be cast to native types.
     * Memastikan tanggal diakses sebagai instance Carbon
     *
     * @var array
     */
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}