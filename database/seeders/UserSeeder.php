<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::truncate();

        $users = [
            ['name' => 'User One', 'email' => 'user1@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Two', 'email' => 'user2@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Three', 'email' => 'user3@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Four', 'email' => 'user4@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Five', 'email' => 'user5@example.com', 'password' => Hash::make('password')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
