<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Credential>
 */
class CredentialFactory extends Factory
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
            'site' => $this->faker->domainName(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->optional()->phoneNumber(),
            'username' => $this->faker->userName(),
            'password' => $this->faker->password(8, 16), // simulates plaintext or basic hash
            'leaked' => $this->faker->boolean(30), // 30% chance it's leaked
            'metadata' => [
                'last_seen' => $this->faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'notes' => $this->faker->optional()->sentence(),
            ],
            'source_info' => $this->faker->randomElement(['data_breach', 'user_input']),
        ];
    }
}
