<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'username' => 'adminuser',
                'phone' => '01021838680',
                'email' => 'admin@gmail.com',
                'password' => '12341234',
                'role' => 'Admin',
            ],
            [
                'name' => 'vendor',
                'username' => 'vendoruser',
                'phone' => '01021838680',
                'email' => 'vendor@gmail.com',
                'password' => '12341234',
                'role' => 'Vendor',
            ],
            [
                'name' => 'user',
                'username' => 'useruser',
                'phone' => '01021838680',
                'email' => 'user@gmail.com',
                'password' => '12341234',
                'role' => 'User',
            ],
        ];

        foreach ($users as $input) {
            User::create($input);
        }
    }
}
