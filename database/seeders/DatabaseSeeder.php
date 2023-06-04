<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // add category seed
        $this->call(CategoryData::class);
        $this->call(SliderSeeder::class);
        $this->call(StaticPageSeeder::class);
        $this->call(SubServiceSeeder::class);
        $this->call(OtherServicesSeeder::class);
        $this->call(BrandLogoSeeder::class);
        $this->call(BulletSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(ProjectSeed::class);
    }
}
