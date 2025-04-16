<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
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
            'account_id' => Account::inRandomOrder()->value('id'),
            'type' => $this->faker->randomElement(['search', 'click', 'visit', 'purchase']),
            'description' => $this->faker->sentence(),
            'category' => $this->faker->randomElement(['medical', 'shopping', 'news']),
            'occurred_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'ip_address' => $this->faker->ipv4(),
            'device' => $this->faker->randomElement(['mobile', 'desktop']),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'browser' => $this->faker->randomElement(['Chrome', 'Firefox', 'Safari', 'Edge']),
            'os' => $this->faker->randomElement(['Windows', 'macOS', 'Linux', 'Android', 'iOS']),
            'source_info' => $this->faker->randomElement(['data_breach', 'user_input']),
            'metadata' => json_encode([
                'referrer' => $this->faker->url(),
                'campaign' => $this->faker->word(),
            ]),
        ];
    }
}
