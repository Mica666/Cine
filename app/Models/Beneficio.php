<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
      
     //relacion uno a muchos
     public function entradas(){
        return $this->hasMany(Entrada::class);
     }

          //relacion  uno a uno polimorfica
          public function image(){
            return $this->morphOne(Image::class, 'imageable');
        }

        public function dia(){
          return $this->belongsTo(Dia::class, 'dias_id');
       }
}
