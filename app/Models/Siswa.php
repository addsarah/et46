<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model implements Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'siswa';

    protected $fillable = [
        'nama_siswa',
        'user_id',
        'kelas',
        'kompetensi',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sikap(): HasOne
    {
        return $this->hasOne(Sikap::class);
    }

    public function tengah_semester(): HasOne
    {
        return $this->hasOne(Tengah_semester::class);
    }

    public function ulangan_harian(): HasOne
    {
        return $this->hasOne(Ulangan_harian::class);
    }

    public function akhir_semester(): HasOne
    {
        return $this->hasOne(Akhir_semester::class);
    }

    public function mapel():HasOne
    {
        return $this->HasOne(Mapel::class, 'mapel_id','id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function nilai ()
    {
        return $this->hasOne(Nilai::class, 'nilais_id', 'id');
    }

    public function remedial ()
    {
        return $this->hasOne(Remedial::class);
    }

    // Metode dari kontrak Authenticatable

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
