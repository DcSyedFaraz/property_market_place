<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, // Generate a company name
            'email' => $this->faker->unique()->safeEmail, // Generate a unique email address
            'phone' => $this->faker->phoneNumber, // Generate a phone number
            'logo' => $this->faker->image('public/storage/images', 400, 300, null, false), // Generate a random logo image URL
            'description' => $this->faker->paragraph, // Generate a random description paragraph
            'status' => $this->faker->randomElement(['active', 'inactive']), // Random status (active or inactive)
        ];

    }
}
