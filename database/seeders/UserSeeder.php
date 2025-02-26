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
        $users = [
            [
                "name"=> "Admin",
                "email"=> "admin@admin.com",
                "password"=> Hash::make("12345678"),
                "role"=> "admin",
            ],
            [
                "name"=> "Gestor",
                "email"=> "manager@manager.com",
                "password"=> Hash::make("12345678"),
                "role"=> "manager",
            ],
            [
                "name"=> "User",
                "email"=> "user@user.com",
                "password"=> Hash::make("12345678"),
                "role"=> "user",
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
