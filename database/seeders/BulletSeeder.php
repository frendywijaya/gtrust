<?php

namespace Database\Seeders;

use App\Models\BulletPoint;
use Illuminate\Database\Seeder;

class BulletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add data bullet points
        $data_bullets = [
            [
                'title' => 'Value Proposition Here',
                'image' => '57-h2_about_icon01.svg'
            ],
            [
                'title' => 'Our Core Time Values Lenthlyness',
                'image' => '64-h2_about_icon02.svg'
            ]
        ];

        foreach ($data_bullets as $bullet) {
            BulletPoint::create($bullet);
        }
        
    }
}
