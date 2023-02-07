<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
 //relacion uno a muchos
 public function entradas(){
   return $this->hasMany(Entrada::class);
}
}
