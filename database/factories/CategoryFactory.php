<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $color = ['red', 'blue', 'green', 'yellow'];
        $category_name = fake()->sentence(rand(1, 2), false);
        return [
            'name' => $category_name,
            'slug' => Str::slug($category_name),
            'color' => $color[rand(0, 3)]
        ];
    }
}
