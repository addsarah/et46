<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulangan_harian extends Model
{
    use HasFactory;

    protected $fillable = [
        'mapels_id',
        'users_id',
        'siswas_id',
        'nilai_tugas',
        'nilai_ulangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    // Define the relationship with the 'siswas' table
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswas_id', 'id');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapels_id', 'id');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'ulangan_harians_id');
    } 
}
