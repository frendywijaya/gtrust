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
                'title' => 'Immersive Assistance to Uncover Solutions',
                'subtitle' => 'Strategic Facilitation',
                'content' => 'We strive to provide comprehensive facilitation to assist you in accomplishing your company purposes.',
                'image' => '74-slider03.jpg',
                'button_text' => 'Discover More',
                'button_link' => '#',
            ],
            [
                'title' => 'Upskill Your Team with Experience Based Learnings',
                'subtitle' => 'Learning',
                'content' => 'Our cutting-edge curriculums engage your team with fun and extensive learning experiences to stimulate their professional development.',
                'image' => '80-slider02.jpg',
                'button_text' => 'Discover More',
                'button_link' => '#',
            ]
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
