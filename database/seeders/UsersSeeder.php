<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['email' => 'user1@example.com', 'first_name' => 'User', 'last_name' => 'One', 'password' => Hash::make('123456')],
            ['email' => 'user2@example.com', 'first_name' => 'User', 'last_name' => 'Two', 'password' => Hash::make('123456')],
            ['email' => 'user3@example.com', 'first_name' => 'User', 'last_name' => 'Three', 'password' => Hash::make('123456')],
            ['email' => 'user4@example.com', 'first_name' => 'User', 'last_name' => 'Four', 'password' => Hash::make('123456')],
            ['email' => 'user5@example.com', 'first_name' => 'User', 'last_name' => 'Five', 'password' => Hash::make('123456')],
        ];

        DB::table('users')->insert($users);
    }
}

