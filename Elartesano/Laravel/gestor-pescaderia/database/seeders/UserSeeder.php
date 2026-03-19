<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('123456'),
                'telefono' => '+34600111222',
                'estado' => 'activo',
                'role_id' => 1
            ],
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan@test.com',
                'password' => Hash::make('123456'),
                'telefono' => '+34600222333',
                'estado' => 'activo',
                'role_id' => 2
            ]
        ]);
    }
}
