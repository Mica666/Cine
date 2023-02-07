<?php

namespace Database\Factories;

use App\Models\Butaca;
use App\Models\Sala;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Butaca>
 */
class Sala_ButacaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
            return [
                'salas_id' => Sala::all()->random()->id,
                'butacas_id' => Butaca::all()->random()->id
           ];
        
    }
}
