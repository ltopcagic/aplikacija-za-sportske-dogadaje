<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dogadaj extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function users_on_dogadajs(){
        return $this->hasMany(Users_on_dogadaj::class,'dogadajID','id');
    }
    public function upit(){
        return $this->hasMany(Upit::class);
    }
    public function scopenotUsers($query){
        return $query->whereDoesntHave('users_on_dogadajs', function($query){
            $query->where('userID', 'like', Auth::user()->id);
        });
    }
    public function scopeattendUsers($query){
        return $query->whereHas('users_on_dogadajs', function($query){
            $query->where('userID', 'like', Auth::user()->id);
        });
    }

}

