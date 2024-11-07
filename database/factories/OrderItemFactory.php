<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orderitem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $unit_price = $this->faker->randomFloat(2, 5, 500);
        $quantity = $this->faker->numberBetween(1, 10);

        return [
            'name' => $this->faker->word(),
            'unit_price' => $unit_price,
            'quantity' => $quantity,
            'total' => $unit_price * $quantity, 
            'product_id' => Product::factory(),
            'order_id' => Order::factory(),
        ];
    }
}
