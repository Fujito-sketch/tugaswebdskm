<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserBiosFactory extends Factory
{
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName,
            'password' => Hash::make('password'), // default hashed password
            'unique_fact' => $this->faker->sentence,
            'email' => $this->faker->unique()->safeEmail,
            'about_me' => $this->faker->paragraph,
            'hobby' => $this->faker->word,
            'major' => $this->faker->word,
            'role' => 'user',
            'address' => $this->faker->address,
            'age' => $this->faker->numberBetween(18, 60),
        ];
    }
}
