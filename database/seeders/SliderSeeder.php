<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add slider
        $sliders = [
            [
                'title' => 'Empower Your Manpower’s Growth in Creative Ways',
                'subtitle' => 'Gtrust',
                'content' => 'We empower you in unleashing the full potential of your team by providing attentive learning and facilitation services in constructive and fun approaches.',
                'image' => '74-slider03.jpg',
                'button_text' => 'Discover More',
                'button_link' => '/about',
            ],
            [
                'title' => 'Immersive Assistance to Uncover Solutions',
                'subtitle' => 'Strategic Facilitation',
                'content' => 'We strive to provide comprehensive facilitation to assist you in accomplishing your company purposes.',
                'image' => '74-slider03.jpg',
                'button_text' => 'Discover More',
                'button_link' => 'services/facilitation',
            ],
            [
                'title' => 'Develop Your Team with Experience-Based Learnings',
                'subtitle' => 'Learning',
                'content' => 'Our creative learning methods engage your team with fun and comprehensive learning experiences to stimulate their professional growth.',
                'image' => '80-slider02.jpg',
                'button_text' => 'Discover More',
                'button_link' => 'services/learning',
            ]
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
