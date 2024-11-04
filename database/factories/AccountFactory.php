<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            // 'password' => $faker->password,
            'created_at' => fake()->datetime($max = 'now', $timezone = date_default_timezone_get()),
            'updated_at' => fake()->datetime($max = 'now', $timezone = date_default_timezone_get())
        ];
    }
}
