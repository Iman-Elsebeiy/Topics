<?php

namespace Database\Factories;
use App\Models\Category;
use App\Models\Topic;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->word(),
            'content' => fake()->text(),
            'trending' => fake()->boolean(),
            'published' =>fake()->boolean(),
            'image' => $this->faker->imageUrl(),
            'category_id'=>fake()->numberBetween(1,6),
        
        ];
    }
}
