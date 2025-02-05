<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'age'=> fake()->numberBetween(18, 60),
            'dob'=> fake()->date(),
            'address'=> fake()->address(),
            'married'=> fake()->boolean(),
        ];
    }
}
