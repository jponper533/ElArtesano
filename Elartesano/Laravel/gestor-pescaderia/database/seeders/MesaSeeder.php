<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesaSeeder extends Seeder
{
    public function run(): void
    {
        $mesas = [];
        for ($i = 1; $i <= 10; $i++) {
            $mesas[] = [

                'numero' => $i,
                'capacidad' => rand(2, 6),
                'estado' => 'disponible'
            ];
        }
        DB::table('mesas')->insert($mesas);
    }
}
