<?php

namespace Database\Seeders;

use App\Enums\RolSlug;
use App\Models\Rol;
use App\Models\User;
use App\Models\Pelicula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  use WithoutModelEvents;

  /**
   * Seed the application's database.
   */
  public function run(): void
  {
      // User::factory(10)->create();

      //User::factory()->create([
      //  'name' => 'Test User',
      //'email' => 'test@example.com',
      // ]);
      $this->call([
          RolSeeder::class,
          UserSeeder::class,
          PeliculaSeeder::class,
          AlquilerSeeder::class


    ]);
  }
}
