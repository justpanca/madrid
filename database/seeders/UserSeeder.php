<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            [
                "role_user" => 'admin',
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "password" => Hash::make("admin"),
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        User::insert($admin);
    }
}
