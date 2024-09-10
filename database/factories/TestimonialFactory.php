<?php

namespace Database\Factories;
use App\Models\Testimonial;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
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
            'name'=>fake()->name(),
            'image'=>basename(fake()->image(public_path('admin/assets/images/testimonials'))),
            'content'=>fake()->text(),
            'published'=>fake()->boolean(),
        ];
    }
}
