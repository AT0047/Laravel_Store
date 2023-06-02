<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_id = User::pluck('id')->toArray();
        return [
            'job_title' => fake()->jobTitle(),
            'Hour_work' => fake()->numberBetween(8,12),
            'salary' => fake()->numberBetween(2000,20000),
            'user_id' =>fake()->randomElement($user_id)

        ];
    }
}
