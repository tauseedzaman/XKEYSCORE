<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Social>
 */
class SocialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $username = $this->faker->userName();
        $platform = $this->faker->randomElement(['Facebook', 'Instagram', 'Twitter', 'LinkedIn', 'Snapchat']);

        return [
            'account_id' => Account::inRandomOrder()->value('id') ?? Account::factory(),
            'platform' => $platform,
            'username' => $username,
            'link' => "https://{$platform}.com/{$username}",
            'metadata' => [
                'followers' => $this->faker->numberBetween(100, 10000),
                'verified' => $this->faker->boolean(10), // 10% chance verified
            ],
            'source_info' => $this->faker->randomElement(['search', 'click', 'user_input']),
        ];
    }
}
