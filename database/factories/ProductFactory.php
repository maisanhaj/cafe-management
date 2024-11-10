<?php

namespace Database\Factories;

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
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(100, 10000),
            'image_path' => $this->faker->filePath(),
            'quantity' => $this->faker->numberBetween(1, 100),
           // 'status' => $this->faker->randomElement(['available', 'out_of_stock']),
            'category_id' => Category::factory(),
        ];
    }
}
