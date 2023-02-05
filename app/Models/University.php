<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $table = 'universities';

    // connect with detail_users table
    public function detailUser()
    {
        return $this->hasMany(DetailUser::class);
    }

    // connect with events table
    public function event()
    {
        return $this->hasMany(Event::class);
    }

    protected $fillable = [
        'nama_universitas',
        'alamat',
        'no_telp',
        'email',
        'website'
    ];
}
