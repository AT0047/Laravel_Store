<?php

namespace Database\Factories;

use App\Models\company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bransh>
 */
class BranshFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $company_id = company::pluck('id')->toArray();
        return [
            'Name' => fake()->company(),
            'Manager' =>fake()->name(),
            'location' => fake()->address(),
            'company_id' => fake()->randomElement($company_id),

        ];
    }
}
