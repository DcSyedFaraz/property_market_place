<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Amenity>
 */
class AmenityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $directory = 'public/storage/logos';
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        return [
            'name' => $this->faker->word, // Generates a random word for the name
            'logo' => 'logos/' . $this->faker->image('public/storage/logos', 100, 100, null, false), // Generates a random logo
            'description' => $this->faker->paragraph, // Generates a random paragraph for the description
        ];
    }
}
