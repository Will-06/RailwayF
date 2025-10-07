<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'super_admin', 'display_name' => 'Super Administrador'],
            ['name' => 'admin', 'display_name' => 'Administrador'],
            ['name' => 'cliente', 'display_name' => 'Cliente'],
        ];
    
        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['name' => $role['name']], // Busca por 'name'
                ['display_name' => $role['display_name']] // Actualiza o inserta
            );
        }
    }
}    
