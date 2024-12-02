<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\post;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $guarded = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
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

    // public function konsultasis()
    // {
    //     return $this->belongsToMany('App\Models\konsultasi');
    // }

    // public function members()
    // {
    //     return $this->hasMany(Member::class, 'user_id', 'id');
    // }

    public function post()
    {
        return $this->hasMany(post::class);
    }

    public function konsultasi()
    {
        return $this->hasMany(konsultasi::class);
    }

    public function JawabanSoalEmosi()
    {
        return $this->hasMany(JawabanSoalEmosi::class);
    }




    public function JawabanMateriNarkoba()
    {
        return $this->hasMany(JawabanMateriNarkoba::class);
    }
    public function JurnalEmosi()
    {
        return $this->hasMany(JurnalEmosi::class);
    }

    public function JurnalMindfulness()
    {
        return $this->hasMany(JurnalMindfulness::class);
    }

    public function AccurateSelfAssesmentSK()
    {
        return $this->hasMany(AccurateSelfAssesmentSK::class);
    }

    public function AccurateSelfAssesmentIT()
    {
        return $this->hasMany(AccurateSelfAssesmentIT::class);
    }

    public function AccurateSelfAssesmentRD()
    {
        return $this->hasMany(AccurateSelfAssesmentRD::class);
    }



    public function LKSelfConfidence()
    {
        return $this->hasMany(LKSelfConfidence::class);
    }
    
    
    public function SelfConfidentPKD()
    {
        return $this->hasMany(SelfConfidentPKD::class);
    }

    public function SelfConfidentSK()
    {
        return $this->hasMany(SelfConfidentSK::class);
    }

}


