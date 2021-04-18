<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dogadaj extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function users_on_dogadajs(){
        return $this->hasMany(User::class);
    }
    public function upit(){
        return $this->hasMany(Upit::class);
    }
}

