<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;
use App\Models\User;



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
        return [
            'name'=>fake()->title(),
            'description'=>fake()->text(),
            'priority'=>fake()->numberBetween(1,10),
            'status'=>fake()->numberBetween(0,1),
            'user_id'=>User::all()->random()->id,
        ];
    }
}
