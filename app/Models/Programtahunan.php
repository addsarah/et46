<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programtahunan extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'mapels_id',
        'materi',
        'alokasi_waktu',
        'semester',
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
