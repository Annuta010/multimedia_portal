<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Blog, Post};

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = Blog::get();

        Post::factory(3)
        ->for($blogs->random())
        ->create();
    }
}
