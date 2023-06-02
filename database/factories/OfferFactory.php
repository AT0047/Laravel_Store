<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_id = product::pluck('id')->toArray();
        return [
            'Name' => fake()->name(),
            'product_id' => fake()->randomElement($product_id),
            'salary' => fake()->numberBetween(200, 10000),
            'descrption' => fake()->name(),
            'start_Offer' => fake()->numberBetween(20 ,30),
            'end_Offer' => fake()->numberBetween(20, 30),
        ];
    }
}
