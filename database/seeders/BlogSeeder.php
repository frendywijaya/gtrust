<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add blog seed
        $blogs = [
            [
                'r' => 's'
            ]
        ];

        foreach ($blogs as $blog) {
            \App\Models\Blog::create($blog);
        }
    }
}
