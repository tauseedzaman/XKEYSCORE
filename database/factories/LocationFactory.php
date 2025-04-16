<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $location = $this->faker->city . ', ' . $this->faker->country;

        return [
            'uuid' => $this->faker->uuid(),
            'account_id' => Account::inRandomOrder()->value('id') ?? Account::factory(),
            'ip' => $this->faker->ipv4(),
            'latitude' => $this->faker->latitude(-90, 90),
            'longitude' => $this->faker->longitude(-180, 180),
            'device' => $this->faker->randomElement(['mobile', 'desktop', 'tablet']),
            'logged_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'city' => $this->faker->city(),
            'region' => $this->faker->state(),
            'country' => $this->faker->country(),
            'postal_code' => $this->faker->postcode(),
            'timezone' => $this->faker->timezone(),
            'continent' => $this->faker->randomElement(['North America', 'South America', 'Europe', 'Asia', 'Africa', 'Oceania']),
            'isp' => $this->faker->company() . ' ISP',
            'organization' => $this->faker->company(),
            'location' => $location,
            'source_info' => $this->faker->randomElement(['data_breach', 'user_input']),
            'metadata' => [
                'accuracy_radius' => $this->faker->numberBetween(5, 100),
                'connection_type' => $this->faker->randomElement(['cable', 'fiber', 'dsl']),
            ],
        ];
    }
}
