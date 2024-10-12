<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kisi_kisi extends Model
{
    use HasFactory;
    protected $fillable = [
        'kompeda',
        'materi',
        'rako',
        'indikator',
        'users_id',
    ];

    public function kartu_soal ()
    {
        return $this->hasOne(Kartu_soal::class, 'kisi_kisis_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
