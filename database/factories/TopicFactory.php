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
     
     private function generateRandomImage($path)

    {
        $files = scandir($path);
        $files = array_diff($files,array('',''));

        return fake()->randomElement($files);
    }


    public function definition(): array
    {
        return [
            //
            'title' => fake()->word(),
            'content' => fake()->text(),
            'trending' => fake()->boolean(),
            'published' =>fake()->boolean(),
            'views' =>fake()->randomNumber(),
            'image'=>$this->generateRandomImage(public_path('admin/assets/images/topics/')),
            'category_id'=>fake()->numberBetween(1,5),
        
        ];
    }
}
