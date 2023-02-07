<?php

namespace Database\Factories;

use App\Models\Beneficio;
use App\Models\Butaca;
use App\Models\Codigo;
use App\Models\Combo;
use App\Models\Horario;
use App\Models\Pelicula;
use App\Models\Tipo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EntradaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tipos_id' => Tipo::all()->random()->id,
            'combos_id' => Combo::all()->random()->id,
            'beneficios_id' => Beneficio::all()->random()->id,
            'peliculas_id' => Pelicula::all()->random()->id,
            'horarios_id' => Horario::all()->random()->id,
            'butacas_id' => Butaca::all()->random()->id,
            'users_id' => User::all()->random()->id
        ];
    }
}
