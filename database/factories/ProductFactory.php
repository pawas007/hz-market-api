<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
        $categoriesCount = Category::query()->count();
        return [
            'title' => $this->faker->streetName,
            'short_description' => $this->faker->text(500),
            'in_stock' => rand(0, 100),
            'price' => rand(1, 1000),
            'category_id' => rand(1, $categoriesCount)
        ];
    }
}
