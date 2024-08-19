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
            ['name' => 'User 1', 'email' => 'user1@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 2', 'email' => 'user2@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 3', 'email' => 'user3@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 4', 'email' => 'user4@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 5', 'email' => 'user5@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 6', 'email' => 'user6@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 7', 'email' => 'user7@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 8', 'email' => 'user8@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 9', 'email' => 'user9@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 10', 'email' => 'user10@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 11', 'email' => 'user11@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 12', 'email' => 'user12@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 13', 'email' => 'user13@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 14', 'email' => 'user14@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 15', 'email' => 'user15@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 16', 'email' => 'user16@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 17', 'email' => 'user17@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 18', 'email' => 'user18@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 19', 'email' => 'user19@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 20', 'email' => 'user20@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 21', 'email' => 'user21@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 22', 'email' => 'user22@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 23', 'email' => 'user23@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 24', 'email' => 'user24@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 25', 'email' => 'user25@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 26', 'email' => 'user26@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 27', 'email' => 'user27@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 28', 'email' => 'user28@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 29', 'email' => 'user29@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 30', 'email' => 'user30@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 31', 'email' => 'user31@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 32', 'email' => 'user32@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 33', 'email' => 'user33@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 34', 'email' => 'user34@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 35', 'email' => 'user35@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 36', 'email' => 'user36@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 37', 'email' => 'user37@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 38', 'email' => 'user38@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 39', 'email' => 'user39@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 40', 'email' => 'user40@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 41', 'email' => 'user41@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 42', 'email' => 'user42@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 43', 'email' => 'user43@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 44', 'email' => 'user44@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 45', 'email' => 'user45@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 46', 'email' => 'user46@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 47', 'email' => 'user47@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 48', 'email' => 'user48@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 49', 'email' => 'user49@gmail.com', 'password' => Hash::make('password')],
            ['name' => 'User 50', 'email' => 'user50@gmail.com', 'password' => Hash::make('password')],
            
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
