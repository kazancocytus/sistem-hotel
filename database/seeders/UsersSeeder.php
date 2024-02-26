<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin

            [
                'name' => 'Admin',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('1234'),
                'roles_name' => "Admin",
            ],

            // Agent
            [
                'name' => 'Agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('4321'),
                'roles_name' => "Agent",
            ],

            // User
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('1111'),
                'roles_name' => "User",
            ]
        ]);
    }
}
