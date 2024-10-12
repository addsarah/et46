<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sikap extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswas_id',
        'users_id',
        'nilai',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswas_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}