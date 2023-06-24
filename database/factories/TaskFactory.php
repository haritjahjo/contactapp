<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $businesses = Business::pluck('id');
        // $people = Person::pluck('id');
        
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'status' => fake()->randomElement(['open', 'completed']),
            'taskable_id' => fake()->numberBetween(1,70),
            'taskable_type' => fake()->randomElement(['App\Models\Person', 'App\Models\Business' ]),
        ];
    }
}
