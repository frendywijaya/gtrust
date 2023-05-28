<?php

namespace Database\Seeders;

use App\Models\BrandLogo;
use Illuminate\Database\Seeder;

class BrandLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add brand logos
        $brandLogo = [
            [
                'title' => 'Astra',
                'image' => '9-h2_brand_img02.png'
            ]
        ];

        foreach ($brandLogo as $brand) {
            BrandLogo::create($brand);
        }
    }
}