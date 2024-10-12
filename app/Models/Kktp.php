<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kktp extends Model
{
    use HasFactory;

    protected $fillable = [
        'elemen',
        'tp',
        'interval',
        'users_id'
    ];

    
    public function atp(): HasOne
    {
        return $this->hasOne(Atp::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    
}
