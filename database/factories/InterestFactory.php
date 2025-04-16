<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interest>
 */
class InterestFactory extends Factory
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
            'interest' => $this->faker->randomElement([
                'Politics',
                'Health',
                'Gaming',
                'Technology',
                'Fitness',
                'Music',
                'Travel',
            ]),
            'confidence' => $this->faker->optional()->randomElement(['low', 'medium', 'high']),
            'category' => $this->faker->optional()->randomElement([
                'sports',
                'technology',
                'entertainment',
                'education',
                'news',
            ]),
            'source' => $this->faker->randomElement(['search', 'click', 'visit']),
            'source_info' => $this->faker->randomElement(['data_breach', 'user_input']),
            'metadata' => [
                'added_by' => $this->faker->userName(),
                'timestamp' => $this->faker->dateTime()->format('Y-m-d H:i:s'),
            ],
        ];
    }
}
