<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'name' => 'John Doe',
                'position' => 'CEO',
                'image' => '93-team_img01.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum sem eget purus dapibus, eget molestie nisi dignissim. Quisque id cursus magna. Morbi tellus diam, rhoncus eu interdum non, malesuada egestas felis. Nulla vehicula sed ex eget pharetra. Pellentesque viverra risus vitae quam condimentum vehicula',
            ]
        ];

        foreach ($teams as $team) {
            \App\Models\Team::create($team);
        }
    }
}
