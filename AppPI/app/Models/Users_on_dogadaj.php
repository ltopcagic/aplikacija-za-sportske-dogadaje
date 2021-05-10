<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_on_dogadaj extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function dogadaj(){
        return $this->belongsTo(Dogadaj::class,'dogadajID');
    }
}
