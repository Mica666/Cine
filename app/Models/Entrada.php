<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;
    
    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];

     // muchos a uno
     public function user(){
        return $this->belongsTo(User::class, 'users_id');
}

     //muchos a uno
     public function combo(){
        return $this->belongsTo(Combo::class, 'combos_id');
}

//muchos a uno
public function horario(){
    return $this->belongsTo(Horario::class, 'horarios_id');
}

//muchos a uno
public function beneficio(){
    return $this->belongsTo(Beneficio::class, 'beneficios_id');
}

//muchos a uno
public function pelicula(){
    return $this->belongsTo(Pelicula::class, 'peliculas_id');
}

public function codigo(){
    return $this->belongsTo(Codigo::class, 'codigos_id');
 }

 public function tipo(){
    return $this->belongsTo(Tipo::class, 'tipos_id');
 }

 public function butaca(){
    return $this->belongsTo(Butaca::class, 'butacas_id');
 }
}
