<?php

use Illuminate\Database\Seeder;

class sectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sector')->insert([
            'sector_name_ar' => Str::random(10),
            'sector_name_en' => Str::random(10),
            'text_en' => Str::random(100),
            'text_ar' => Str::random(70),
            'Brief_en' => Str::random(30),
            'Brief_ar' => Str::random(25),
            'intro_en' => Str::random(15),
            'intro_ar' => Str::random(15),


            'icon'=> "bg-cta-img",
            'image1'=> "download",
            'image2'=> "fav-ico",
            'image3'=> "InvestIN-02",

        ]);
    }
}
