<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class MillingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'en_name' => fake()->name(),
            'en_description' => fake()->name(),
            'am_name' => fake()->name(),
            'am_description' => fake()->name(),
            'ru_name' => fake()->name(),
            'ru_description' => fake()->name(),
        ];
    }

}
