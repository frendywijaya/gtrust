<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add testimoni

        $testimonies = [
            [
                'image' => '1-h2_testi_avatar01.png',
                'name' => 'John Doe',
                'position' => 'CEO',
                'testimoni' => "<p>There are many varation of paissages of Lorem as the Ipum available but our
                majority have sufferied alterations in some form, by our by injected hsumour
                randomised worids which don't looks even slightly there as believable. If you
                going to use a passage of Lorem Ipsum.</p>"
            ]
        ];

        foreach ($testimonies as $testimony) {
            Testimoni::create($testimony);
        }
    }
}
