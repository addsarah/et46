<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu_soal extends Model
{
    use HasFactory;
    protected $fillable = [
        'kisi_kisis_id',
        'users_id',
        'kj',
        'desk_soal',
        'buac',
    ];

    public function kisi_kisi()
    {
        return $this->belongsTo(Kisi_kisi::class, 'kisi_kisis_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
