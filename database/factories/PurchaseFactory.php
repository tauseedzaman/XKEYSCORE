<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Purchase>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'account_id' => Account::inRandomOrder()->value('id') ?? Account::factory(),
            'item' => $this->faker->randomElement([
                'Fitness Tracker',
                'Organic Vitamins',
                'Bluetooth Headphones',
                'E-book Reader',
                'Yoga Mat'
            ]),
            'currency' => $this->faker->randomElement(['USD', 'EUR', 'GBP', 'BRL']),
            'category' => $this->faker->randomElement(['health', 'gadgets', 'books', 'clothing']),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'crypto']),
            'purchased_at' => $this->faker->dateTimeBetween('-2 months', 'now'),
            'ip_address' => $this->faker->ipv4(),
            'device' => $this->faker->randomElement(['mobile', 'desktop', 'tablet']),
            'source_info' => $this->faker->randomElement(['data_breach', 'user_input']),
            'metadata' => [
                'transaction_id' => $this->faker->uuid(),
                'shipping_method' => $this->faker->randomElement(['standard', 'express']),
                'refunded' => $this->faker->boolean(10),
            ],
        ];
    }
}
