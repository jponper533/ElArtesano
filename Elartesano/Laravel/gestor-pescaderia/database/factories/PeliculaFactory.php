<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarea;
use App\Models\User;
use App\Models\TipoTarea;
use App\Models\Proyecto;
use App\Models\Estado;
use App\Models\Pelicula;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    protected $model = Pelicula::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->unique()->name(),
            'genero' => fake()->randomElement(['Acción', 'Comedia', 'Drama', 'Terror', 'Ciencia Ficción']),
            'precio' => fake()->randomNumber(2)
        ];
    }

   
}
