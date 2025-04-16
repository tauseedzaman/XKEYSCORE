<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
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
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'username' => $this->faker->unique()->userName(),
            'password' => bcrypt('password'), // change as needed
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'dob' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'ip_address' => $this->faker->ipv4(),
            'device' => $this->faker->randomElement(['iPhone', 'Android', 'Windows', 'Mac']),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'occupation' => $this->faker->jobTitle(),
            'income_range' => $this->faker->randomElement(['<10k', '10k-50k', '50k-100k', '>100k']),
            'marital_status' => $this->faker->randomElement(['single', 'married', 'divorced', 'widowed']),
            'education' => $this->faker->randomElement(['High School', 'Bachelor', 'Master', 'PhD']),
            'profile_picture' => $this->faker->imageUrl(300, 300, 'people'),
            'bio' => $this->faker->paragraph(),
            'website' => $this->faker->url(),
            'source_info' => $this->faker->randomElement(['data_breach', 'user_input']),
            'metadata' => json_encode([
                'interests' => $this->faker->words(3),
                'signup_method' => $this->faker->randomElement(['email', 'social']),
            ]),
        ];
    }
}
