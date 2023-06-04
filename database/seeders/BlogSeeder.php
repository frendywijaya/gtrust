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
                'title' => 'Building worker help each other with at construction site',
                'slug' => 'building-worker-help-each-other-with-at-construction-site',
                'description' => '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at it as layout. The point of using Lorem Ipsum is that it has a more normal distribution.Collaboratively pontificat bleed aedge resources with inexpensive methodologies globally initiate multidisciplinary compatible architectures as our aspiteously repurpose leading edge growth strategies</p>',
                'image' => '1685859198.jpg',
                'writer' => 'Admin',
                'category_id' => 1,
                'status' => 1,
                'date' => '2023-06-04'
            ],
        ];

        foreach ($blogs as $blog) {
            \App\Models\Blog::create($blog);
        }
    }
}
