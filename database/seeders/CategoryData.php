<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create category seed
        $categories = [
            [
                'title' => 'Business Analyst',
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
