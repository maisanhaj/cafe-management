<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status_order' => $this->faker->randomElement(['pending', 'approved']), 
            'total' => $this->faker->randomFloat(2, 10, 1000),
            'user_id' => User::factory(),
        ];
    }
}
