<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Enums\RolSlug;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('1234')
        // ]);

        // Sin cadenas mágicas, utilizamos la enumeración RoleSlug
        $administradorRole = Role::where('slug', RolSlug::ADMIN)->first();
        User::firstOrCreate(['name' => 'admin', 'email' => 'admin@admin.com', 'password' => bcrypt('1234'), 'role_id' => $administradorRole->id]);
        // Sin cadenas mágicas, utilizamos la enumeración RoleSlug
        $usuarioRole = Role::where('slug', RolSlug::USER)->first();
        User::firstOrCreate(['name' => 'antonio', 'email' => 'antonio@antonio.com', 'password' => bcrypt('1234'), 'role_id' => $usuarioRole->id]);

        
    }
}
