<?php

namespace Database\Seeders;

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
        DB::table('roles')->insert([
            ['role_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['role_name' => 'subrogados', 'created_at' => now(), 'updated_at' => now()],
            ['role_name' => 'generales', 'created_at' => now(), 'updated_at' => now()],
            ['role_name' => 'materiales', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
