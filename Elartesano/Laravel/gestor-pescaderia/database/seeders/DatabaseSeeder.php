<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    $this->call([
      RoleSeeder::class,
      UsuarioSeeder::class,
      MesaSeeder::class,
      IngredienteSeeder::class,
      PlatoSeeder::class,
      ReservaSeeder::class,
    ]);
  }
}
