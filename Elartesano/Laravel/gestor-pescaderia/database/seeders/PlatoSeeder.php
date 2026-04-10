<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('platos')->insert([
            ['id' => 1, 'nombre' => 'Hamburguesa', 'descripcion' => 'Clásica', 'precio' => 8.5, 'imagen' => 'https://img.hogar.mapfre.es/wp-content/uploads/2018/09/hamburguesa-sencilla.jpg', 'estado' => 'activo'],
            ['id' => 2, 'nombre' => 'Ensalada', 'descripcion' => 'Fresca', 'precio' => 6, 'imagen' => 'https://imag.bonviveur.com/presentacion-de-la-ensalada-de-aguacate.jpg', 'estado' => 'activo'],
        ]);
        DB::table('plato_ingrediente')->insert([
            ['plato_id' => 1, 'ingrediente_id' => 2],
            ['plato_id' => 1, 'ingrediente_id' => 5],
            ['plato_id' => 1, 'ingrediente_id' => 6],
            ['plato_id' => 2, 'ingrediente_id' => 1],
            ['plato_id' => 2, 'ingrediente_id' => 3],
        ]);
    }
}
