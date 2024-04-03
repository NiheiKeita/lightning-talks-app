<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LightningTalk>
 */
class LightningTalkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'conference_id' => \App\Models\Conference::factory(),
            'user_id' => \App\Models\User::factory(),
            'title' => $this->faker->sentence,
            'explanation' => $this->faker->paragraph,
        ];
    }
}
