<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

    'title' => fake()->sentence(),
    'description' => fake()->paragraph(),
    'user_id' => \App\Models\User::factory(), // assumes relationship
    'category_id' => Category::factory(),

];
    }
}
