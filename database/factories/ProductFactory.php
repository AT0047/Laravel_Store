<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_id = category::pluck('id')->toArray();
        $create_by = User::pluck('id')->toArray();
        return [
            'Name' =>  fake()->name(),
            'salary' => fake()->numberBetween(200, 10000),
            'descrption' => fake()->word(),
            'Img' => fake()->image(),
            'category_id' => fake()->randomElement($category_id),
            'create_by' => fake()->randomElement($create_by),
        ];
    }
}
