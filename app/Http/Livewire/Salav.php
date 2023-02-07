<?php

namespace App\Http\Livewire;
use App\Models\Sala;
use App\Models\Butaca;
use Livewire\Component;

class Salav extends Component
{
    public $sala, $butaca;
    public $salas = [], $butacas = [];

    public function mount()
    {
        $this->salas = Sala::all();
        $this->butacas = collect();
    }

    public function updatedSala($value)
    {
        $this->butacas = Butaca::where('salas_id', $value)->get();
        $this->butaca = $this->butacas->first()->id ?? null;   
    }
    public function render()
    {
        return view('livewire.salav');
    }
}
