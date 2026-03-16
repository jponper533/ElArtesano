<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alquiler>
 */
class AlquilerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'pelicula_id' => \App\Models\Pelicula::inRandomOrder()->first()->id,
            'fecha_alquiler' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'fecha_devolucion' => $this->faker->dateTimeBetween('now', '+1 month'),
            'notas' => $this->faker->sentence()
        ];
    }
}
