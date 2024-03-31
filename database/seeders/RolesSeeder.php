<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'roles_name' => 'Admin'
            ],
            [
                'roles_name' => 'Agent'
            ],
            [
                'roles_name' => 'User'
            ]
        ]);
    }
}
