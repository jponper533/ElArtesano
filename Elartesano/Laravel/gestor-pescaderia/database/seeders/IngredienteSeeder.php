<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredienteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ingredientes')->insert([
            ['nombre' => 'Tomate'],
            ['nombre' => 'Queso'],
            ['nombre' => 'Lechuga'],
            ['nombre' => 'Pollo'],
            ['nombre' => 'Carne'],
            ['nombre' => 'Pan'],
            ['nombre' => 'Cebolla'],
        ]);
    }
}
