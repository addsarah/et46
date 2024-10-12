<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nilai_tugas',
        'nilai_ulangan_harian',
        'nilai_tengah_semester',
        'nilai_akhir_semester',
        'mapels_id',
        'users_id',
        'siswas_id',
        'semester',
        'ta'
    ];
    
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapels_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nama_siswa');
    }

    public function Remedial()
    {
        return $this->hasOne(Remedial::class);
    }

       
}
