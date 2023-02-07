<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
       //muchos a muchos
       public function butacas(){
        return $this->hasMany(Butaca::class);
     }

     public function horarios(){
      return $this->hasMany(Horario::class);
   }

}
