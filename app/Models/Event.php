<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    // connect with detail_users table
    public function detailUser()
    {
        return $this->hasMany(DetailUser::class);
    }

    // connect with universities table
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    protected $fillable = [
        'nama_event',
        'deskripsi',
        'image',
        'tempat',
        'kategori',
        'tanggal',
        'quota',
        'status',
    ];
}
