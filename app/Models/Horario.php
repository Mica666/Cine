<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    

 //relacion muchos a muchos 
public function pelicula(){
    return $this->belongsTo(Pelicula::class, 'peliculas_id');
 }

  //relacion muchos a muchos 
public function sala(){
    return $this->belongsTo(Sala::class, 'salas_id');
 }

  //relacion muchos a muchos 
public function entradas(){
    return $this->hasMany(Entrada::class);
 }
}
