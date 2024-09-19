<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyType>
 */
class PropertyTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_type' => $this->faker->randomElement(['Apartment', 'Villa', 'Townhouse']),
            'unit_type' => $this->faker->randomElement(['Type A', 'Type B', 'Type C']),
            'size' => $this->faker->randomFloat(2, 500, 3000) . ' Sq Ft', // e.g., "1200 Sq Ft"
        ];
    }
}
