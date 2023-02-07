<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dia>
 */
class DiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $dia=$this->faker->unique()->sentence();

        return [
            'dia' => $dia,
            'slug' => Str::slug($dia)
    
        ];
    }
}
