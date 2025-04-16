<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
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
            'platform' => $this->faker->randomElement(['WhatsApp', 'Gmail', 'Telegram', 'Messenger']),
            'recipient' => $this->faker->email(),
            'content' => $this->faker->paragraph(),
            'sent_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'status' => $this->faker->randomElement(['pending', 'sent', 'delivered', 'read']),
            'ip_address' => $this->faker->ipv4(),
            'device' => $this->faker->randomElement(['mobile', 'desktop', 'tablet']),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'browser' => $this->faker->randomElement(['Chrome', 'Firefox', 'Safari', 'Edge']),
            'os' => $this->faker->randomElement(['Windows', 'macOS', 'Linux', 'Android', 'iOS']),
            'source_info' => $this->faker->randomElement(['data_breach', 'user_input']),
            'metadata' => [
                'attachments' => $this->faker->randomElement([[], ['file.pdf'], ['img.jpg', 'doc.docx']]),
                'priority' => $this->faker->randomElement(['low', 'normal', 'high']),
            ],
        ];
    }
}
