<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear usuario admin
        $userId = DB::table('users')->insertGetId([
            'name' => 'Administrador',
            'email' => 'lmorales@yopmail.com',
            'password' => Hash::make('12345'), // siempre encriptado
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Buscar ID del rol admin
        $roleId = DB::table('roles')->where('role_name', 'admin')->value('id');

        // Insertar en tabla pivote
        DB::table('role_user')->insert([
            'user_id' => $userId,
            'role_id' => $roleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
