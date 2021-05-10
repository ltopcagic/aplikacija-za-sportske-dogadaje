<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upit extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function user(){
        return $this->belongTo(User::class);
    }
    public function dogadaj(){
        return $this->belongsTo(Dogadaj::class,'dogadajID');
    }
    public function scopebez_odgovora($query){  //prikaz dolaznih samo gdje nemamo odgovora!
        return $query->whereNull('odgovor');
    }
}
