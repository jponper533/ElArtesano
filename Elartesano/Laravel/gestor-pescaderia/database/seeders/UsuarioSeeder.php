<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'password' => bcrypt('Admin_123'),
                'telefono' => '+34600111222',
                'estado' => 'activo',
                'rol_id' => 1
            ],
            [
                'name' => 'Juan Pérez',
                'email' => 'juan@test.com',
                'password' => bcrypt('Juan_123'),
                'telefono' => '+34600222333',
                'estado' => 'activo',
                'rol_id' => 2
            ]
        ]);
    }
}
