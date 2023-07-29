<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name,
            'ingredients' => fake()->sentence(10),
            'price'=> fake()->numberBetween(1,100),
            'category_id'=> Category::get()->random()->id,
            'image'=> fake()->imageUrl,
            'weight'=> fake()->numberBetween(100,500)
        ];
    }
}
