<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'username' => '',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin'),
            ], [
                'name' => 'useruser',
                'username' => '',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('user'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
