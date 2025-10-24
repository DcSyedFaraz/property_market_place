<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FloorPlan>
 */
class FloorPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => $this->faker->randomElement(['Typical Floor Plan', 'Penthouse Plan']),
            'unit_type' => $this->faker->randomElement(['Layout A', 'Layout B']),
            'floor_details' => $this->faker->randomElement(['1st Floor', '2nd & 3rd Floor']),
            'sizes' => $this->faker->randomFloat(2, 500, 3000) . ' Sq meter',
            'type' => $this->faker->randomElement(['Apartment', 'Penthouse']),
            'image' => 'images/' . $this->faker->image('public/storage/images', 600, 400, 'architecture', null, false), // Random image URL for floor plan
        ];
    }
}
