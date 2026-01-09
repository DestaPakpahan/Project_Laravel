<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'username' => 'adminnotulen',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
            [
                'username' => 'usernotulen',
                'password' => Hash::make('123456'),
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['username' => $user['username']],
                $user
            );
            
        }
    }
}
