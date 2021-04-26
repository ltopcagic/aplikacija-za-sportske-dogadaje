<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ime',
        'gpsID',
        'prezime',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function GPS(){
        return $this->belongsTo(User::class);
    }
    public function dogadaj(){
        return $this->hasMany(Dogadaj::class,'userID','id');
    }
    public function users_on_dogadajs(){
        return $this->hasMany(Users_on_dogadaj::class);
    }
    public function upit_poslani(){  //prikaz poslanih upita
        return $this->hasMany(Upit::class,'userID','id');
    }
    public function upit_dolazni(){  //prikaz dolaznih upita
        return $this->hasManyThrough(
            Upit::class, //deployment
            Dogadaj::class, //enviroment
            'userID', // Foreign key on the environments table...
            'dogadajID', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }

}
