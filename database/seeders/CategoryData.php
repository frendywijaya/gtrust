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
        // create 5 categories
        \App\Models\Category::factory(5)->create();
    }
}
