<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Butaca extends Model
{
    use HasFactory;
    //uno a muchos
    public function sala(){
        return $this->belongsTo(Sala::class, 'salas_id');
     }
     public function entradas(){
        return $this->hasMany(Entrada::class);
     }
}
