<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Blog, User};

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(3)->create();

        Blog::factory(3)
        ->for($users->random())
        ->create();
    }
}
