<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reservas')->insert([
            [
                'fecha' => now()->toDateString(),
                'hora' => '14:00:00',
                'estado' => 'confirmada',

                'user_id' => 2,
                'mesa_id' => 1
            ],
            [
                'fecha' => now()->addDay()->toDateString(),
                'hora' => '21:00:00',
                'estado' => 'pendiente',
                'user_id' => 2,
                'mesa_id' => 2
            ]
        ]);
    }
}
