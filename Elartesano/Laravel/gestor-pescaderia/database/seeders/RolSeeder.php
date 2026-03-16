<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Role::firstOrCreate(['slug' => 'admin', 'nombre' => 'Administrador']);
        Role::firstOrCreate(['slug' => 'user', 'nombre' => 'Usuario']);
    }
}
