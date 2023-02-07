<?php

namespace App\Http\Livewire;

use App\Models\Butaca;
use App\Models\Horario;
use App\Models\Pelicula;
use Livewire\Component;

class Peliv extends Component
{
    public $pelicula = null, $horario = null, $butaca = null;
    public $horarios = null, $butacas = null;


    public function render()
    {
        return view('livewire.peliv', ['peliculas' => Pelicula::all()]);
    }

    
    public function updatedpelicula($value){
        $this->horarios = Horario::where('peliculas_id', $value)->get();
    }

}
