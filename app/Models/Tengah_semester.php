<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tengah_semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'mapels_id',
        'users_id',
        'siswas_id',
        'nilai_tengah_semester',
    ];

    // Define the relationship with the 'gurus' table
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
        return $this->hasMany(Nilai::class, 'tengah_semesters_id');
    }  
}
