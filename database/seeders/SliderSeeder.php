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
                'title' => 'Fun Way to Challenge Serious Problems',
                'subtitle' => 'Company Facilitation',
                'content' => 'Our mbrace change are thriving, building bigger, better,faster, and products than ever Our mbrace.',
                'image' => '74-slider03.jpg',
                'button_text' => 'Discover More',
                'button_link' => 'http://localhost:8000/kontak',
            ]
        ];

        foreach ($sliders as $slider) {
            Slider::create($slider);
        }
    }
}
