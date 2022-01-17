<?php

use App\Models\Blog;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run(Faker $faker)
    {
        
        for ($i=0; $i < 10; $i++) { 
            $blog = new Blog();
            $blog->title = $faker->sentence();
            $blog->content = $faker->paragraphs(rand(4, 6), true);
            $blog->image = "https://picsum.photos/id/{$faker->numberbetween(1001, 1068)}/536/354";
            $blog->post_date = $faker->date();
            $blog->save();
        }

    }
}
