<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\test>
 */
class testFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->unique()->safeEmail,
            'email_verified_at'=>now(),
            'password'=>fake()->unique()->password(),
            'active'=>fake()->boolean(),
            'remember_token' => Str::random(10),
        ];
    }
}