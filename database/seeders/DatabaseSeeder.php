<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Seed Admin
        \App\Models\User::factory()->create([
            'surname' => 'Admin',
            'name' => 'User',
            'patronymic' => 'Puper',
            'phone' => '0222222222',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory()->create([
            'surname' => 'Teacher',
            'name' => 'Ainura',
            'patronymic' => 'Djumakarievna',
            'phone' => '0224221212',
            'email' => 'teacher@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory()->create([
            'surname' => 'Student',
            'name' => 'Joe',
            'patronymic' => 'Warioddly',
            'phone' => '0221221312',
            'email' => 'student@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

    }
}
