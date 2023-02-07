<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];


    
    //muchas a uno
public function genero(){
    return $this->belongsTo(Genero::class, 'generos_id');
 }
//relacion muchos a uno
public function clasificacion(){
    return $this->belongsTo(Clasificacion::class, 'clasificacions_id');
 }
 //relacion uno a muchos
 public function entradas(){
    return $this->hasMany(Entrada::class);
 }
 
      //relacion  uno a uno polimorfica
      public function image(){
         return $this->morphOne(Image::class, 'imageable');
     }


 //relacion muchos a muchos 
public function horarios(){
    return $this->hasMany(Horario::class);
 }
}
