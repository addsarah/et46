<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'nama_mapel',
        'kelas',
        'kkm'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswas_id');
    }

    public function programtahunan ()
    {
        return $this->hasOne(Programtahunan::class, 'nama_mapel');
    }

    public function remedial ()
    {
        return $this->hasOne(Remedial::class, 'nama_mapel');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'mapels_id');
    }   

}
