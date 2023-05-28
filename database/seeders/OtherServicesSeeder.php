<?php

namespace Database\Seeders;

use App\Models\OtherService;
use Illuminate\Database\Seeder;

class OtherServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add other service
        $otherService = [
            [
                'title' => 'Kelas Gemilang',
                'link' => 'https://kelasgemilang.id/',
            ],
            [
                'title' => 'Talensia',
                'link' => 'https://talenesia.com/'
            ]
        ];

        foreach ($otherService as $other) {
            OtherService::create($other);
        }
    }
}
