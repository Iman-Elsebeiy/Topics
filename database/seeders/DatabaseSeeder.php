<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Topic;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Testimonial;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  User::factory(2)->create();
        //  Category::factory(5)->create();
         Topic::factory(10)->create();
         Testimonial::factory(13)->create();
         Contact::factory(5)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    }
}
