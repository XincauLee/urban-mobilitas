<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat akun admin
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com', // Gunakan email ini untuk login
            'password' => Hash::make('password123'), // Gunakan password ini
        ]);
    }
}