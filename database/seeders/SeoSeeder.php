<?php

namespace Database\Seeders;

use App\Models\SEO;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add static pages
        $contents = [
            [
                'page' => 'home',
                'data' => [
                    "title" => "Welcome to Gtrust",
                    "description" => "This is Meta Description",
                    "keywords" => "HRD, Human Development, Team Building",
                ]
            ],
            [
                'page' => 'about',
                'data' => [
                    "title" => "Welcome to Gtrust",
                    "description" => "This is Meta Description",
                    "keywords" => "HRD, Human Development, Team Building",
                ]
            ],
            [
                'page' => 'facilitation',
                'data' => [
                    "title" => "Welcome to Gtrust",
                    "description" => "This is Meta Description",
                    "keywords" => "HRD, Human Development, Team Building",
                ]
            ],
            [
                'page' => 'learning',
                'data' => [
                    "title" => "Welcome to Gtrust",
                    "description" => "This is Meta Description",
                    "keywords" => "HRD, Human Development, Team Building",
                ]
            ],
            [
                'page' => 'contact',
                'data' => [
                    "title" => "Welcome to Gtrust",
                    "description" => "This is Meta Description",
                    "keywords" => "HRD, Human Development, Team Building",
                ]
            ],
        ];

        foreach ($contents as $content) {
            $page = $content['page'];
            $data = json_encode($content['data']);

            SEO::create([
                'page' => $page,
                'data' => $data
            ]);
        }
    }
}
