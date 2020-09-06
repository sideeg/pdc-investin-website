<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class sectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker_ar = Faker\Factory::create('ar_JO');
        $faker_en = Faker\Factory::create('en_JO');

        DB::table('sector')->insert([
            'sector_name_ar' => Str::random(10),
            'sector_name_en' => Str::random(10),
            'Brief_en' => $faker_en->realText(),
            'Brief_ar' => $faker_ar->realText(),
            'text_en' => $faker_en->realText(),
            'text_ar' => $faker_ar->realText(),
            'intro_en' => $faker_en->realText(),
            'intro_ar' => $faker_ar->realText(),


            'icon'=> "bg-cta-img.jpg",
            'image1'=> "download.jpg",
            'image2'=> "fav-ico.png",
            'image3'=> "InvestIN-02.png",
            'background_image'=> "InvestIN-02.png",


        ]);
    }
}
