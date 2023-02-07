<?php

namespace Database\Factories;

use App\Models\Dia;
use App\Models\Hora;
use App\Models\Pelicula;
use App\Models\Sala;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horario>
 */
class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fecha' => $this->faker->date(),
            'hora' => $this->faker->time(),
            'peliculas_id' => Pelicula::all()->random()->id,
            
            'salas_id' => Sala::all()->random()->id
        ];
    }
}
