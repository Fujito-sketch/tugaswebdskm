<?php

namespace Database\Seeders;

use App\Models\UserBios;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Creates the specific "atmint" user
        UserBios::factory()->create([
            'username' => 'atmint',
            'password' => Hash::make('123'),
            'unique_fact' => 'h',
            'email' => 'h@gmail.com',
            'about_me' => 'h',
            'hobby' => 'h',
            'major' => 'h',
            'role' => 'h',
            'address' => 'h',
            'age' => 5,
        ]);

    }
}
