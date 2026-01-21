<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" =>fake()->sentence(2),
            "description" =>fake()->paragraph(),
            "price" =>fake()->randomFloat(2, 2000, 70000),
            "image" =>fake()->image(null, 640, 480),
            "category_id" => Category::pluck('id')->random(),
        ];
    }
}
