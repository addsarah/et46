<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programsemester extends Model
{
    use HasFactory;

    protected $fillable = [
        'komdas',
        'alokasi_waktu',
        'bulan',
        'keterangan',
        'semester',
        'users_id',
        'mapels_id',


    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id'); // Sesuaikan dengan nama kolom yang benar
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapels_id'); // Sesuaikan dengan nama kolom yang benar
    }
}
