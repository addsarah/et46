<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atp extends Model
{
    use HasFactory;

    protected $fillable = [
        'kktps_id',
        'users_id',
        'elemen',
        'cp',
        'tp',
        'atp',
        'renas',
    ];
    
    public function kktp()
    {
        return $this->belongsTo(Kktp::class, 'kktps_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    
}
