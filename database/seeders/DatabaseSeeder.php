<?php

namespace Database\Seeders;

use \App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'tauseedzaman',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        $amount = 10;

        \App\Models\Account::factory($amount)->create();
        \App\Models\Activity::factory($amount)->create();
        \App\Models\Credential::factory($amount)->create();
        \App\Models\Interest::factory($amount)->create();
        \App\Models\Location::factory($amount)->create();
        \App\Models\Message::factory($amount)->create();
        \App\Models\Purchase::factory($amount)->create();
        \App\Models\Social::factory($amount)->create();
    }
}
