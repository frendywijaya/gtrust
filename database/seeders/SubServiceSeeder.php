<?php

namespace Database\Seeders;

use App\Models\SubService;
use Illuminate\Database\Seeder;

class SubServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add sub services
        $subServices = [
            [
                'title' => 'Some of Our Respected',
                'subtitle' => 'Problem Solving',
                'image' => '77-testimonial_img.jpg',
                'description' => "There are many varation of paissages of Lorem as the Ipum available but our majority have sufferied alterations in some form, by our by injected hsumour randomised worids which don't looks even slightly there as believable. If you going to use a passage of Lorem Ipsum.",
                'category' => 'facilitation',
            ],
            [
                'title' => 'Some of Our Respected Happy Clients Says',
                'subtitle' => 'Strategic Plan',
                'image' => '39-testimonial_img.jpg',
                'description' => "There are many varation of paissages of Lorem as the Ipum available but our majority have sufferied alterations in some form, by our by injected hsumour randomised worids which don't looks even slightly there as believable. If you going to use a passage of Lorem Ipsum.",
                'category' => 'learning',
            ]
        ];

        foreach ($subServices as $subService) {
            SubService::create($subService);
        }
    }
}
