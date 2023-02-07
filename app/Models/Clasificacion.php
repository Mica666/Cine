<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clasificacion extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];

     //relacion uno a muchos
     public function peliculas(){
        return $this->belongsToMany(Pelicula::class);
     }
}
