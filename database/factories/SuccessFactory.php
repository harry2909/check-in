<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Success>
 */
class SuccessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => fake()->paragraph(),
            'submission_date' => fake()->date('Y-m-d', '2050-12-25'),
            'user_id' => 1,
        ];
    }
}
