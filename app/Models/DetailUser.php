<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;

    protected $table = 'detail_users';

    // connect with users table
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // connect with universities table
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    // connect with events table
    public function event()
    {
        return $this->hasMany(Event::class);
    }

    protected $fillable = [
        'nim',
        'nip',
        'no_ijazah',
        'no_keanggotaan',
        'nama',
        'alamat',
        'no_hp',
    ];
}
