<?php

namespace Database\Factories;

use App\Models\Sala;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Butaca>
 */
class ButacaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
            return [
                'nombre' =>  $this->faker->numerify(),
                'disponible' =>  $this->faker->randomElement([1, 2]),
                'salas_id' => Sala::all()->random()->id
           ];
        
    }
}
