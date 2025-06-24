<?php

namespace Database\Seeders;

use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create 5 categories
    $categories = Category::factory(5)->create();

    // Create 10 users
    User::factory(10)->create()->each(function ($user) use ($categories) {
        // Each user gets 3 recipes
        Recipe::factory(3)->create([
            'user_id' => $user->id,
            // Randomly assign a category from the list
            'category_id' => $categories->random()->id,
        ]);
    });
    }
}
