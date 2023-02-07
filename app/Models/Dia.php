<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];


public function beneficios(){
  return $this->hasMany(Beneficio::class);
}
}
