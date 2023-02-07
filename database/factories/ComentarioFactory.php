<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text(20),
            'correo' => $this->faker->text(10),
            'telefono' => $this->faker->text(10),
            'motivo' => $this->faker->text(10),
            'texto' => $this->faker->text(10)
        
        ];
    }
}
