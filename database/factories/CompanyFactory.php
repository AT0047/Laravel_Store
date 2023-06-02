<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name' => fake()->company(),
            'number' => fake()->phoneNumber(),
            'owner' => fake()->name(),
            'tax_number' => fake()->numberBetween(10, 15),
        ];
    }
}
