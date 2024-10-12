<?php

namespace App\Models;

use App\Models\Remedial;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
 /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'user';
    protected $fillable = [
        'name',
        'username',
        'email',
        'level',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function mapel ()
    {
        return $this->hasOne(Mapel::class, 'users_id');
    }

    public function adduser ()
    {
        return $this->hasOne(Adduser::class, 'users_id');
    }

    public function programsemester ()
    {
        return $this->hasOne(Programsemester::class, 'users_id');
    }

    public function programtahunan ()
    {
        return $this->hasOne(Programtahunan::class, 'users_id');
    }
    
    public function kktp ()
    {
        return $this->hasOne(Kktp::class, 'users_id');
    }

    public function atp ()
    {
        return $this->hasOne(Atp::class, 'users_id');
    }

    public function kisi_kisi ()
    {
        return $this->hasOne(Kisi_kisi::class, 'users_id');
    }

    public function kartu_soal ()
    {
        return $this->hasOne(Kartu_soal::class, 'users_id');
    }

    public function kelas ()
    {
        return $this->hasOne(Kelas::class, 'users_id');
    }

    // Dalam model User
    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }

    public function remedial ()
    {
        return $this->hasOne(Remedial::class, 'users_id');
    }

    public function nilai ()
    {
        return $this->hasOne(Nilai::class, 'users_id');
    }

    public function sikap ()
    {
        return $this->hasOne(Sikap::class, 'users_id');
    }

    public function ulangan_harian()
    {
        return $this->hasOne(Ulangan_harian::class,'users_id');
    }

    public function tengah_semester()
    {
        return $this->hasOne(Tengah_semester::class,'users_id');
    }

    public function akhir_semester()
    {
        return $this->hasOne(Akhir_semester::class,'users_id');
    }
}
