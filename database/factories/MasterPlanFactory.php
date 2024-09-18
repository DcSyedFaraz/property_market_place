<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterPlan>
 */
class MasterPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company, // Generates a fake company name
            'image' => 'images/' . $this->faker->image('public/storage/images', 640, 480, null, false), // Generates a random image
        ];
    }
}
