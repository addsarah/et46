<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remedial extends Model
{
    use HasFactory;

    protected $fillable = [
        'sesudah',
        'sebelum',
        'nama_ulangan',
        'mapels_id',
        'users_id',
        'nilais_id'
    ];

    public function nilais()
    {
        return $this->belongsTo(Nilai::class, 'nilais_id');
    }

    public function mapels()
    {
        return $this->belongsTo(Mapel::class, 'mapels_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'siswas_id');
    }
}
