<?php

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
         $this->call(sectorSeeder::class);
         $this->call(OurNetworkSeeder::class);
         $this->call(BlogSeeder::class);
         $this->call(SuccessStoriesSeeder::class);
         $this->call(AboutUsSeeder::class);
         $this->call(IntroSeeder::class);





    }
}
