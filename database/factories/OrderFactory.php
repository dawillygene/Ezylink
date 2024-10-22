<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
{
    return [
        'location' => $this->faker->city,
        'category' => $this->faker->word,
        'restaurant' => $this->faker->company,
        'total_price' => $this->faker->numberBetween(1000, 50000),  // Ensure this value is set
        'paymentMethod' => $this->faker->randomElement(['M-Pesa', 'Paypal', 'COD']),
        'delivery_address' => $this->faker->address,
    ];
}

}
