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
        DB::table('sector')->insert([
            'sector_name_ar' => Str::random(10),
            'sector_name_en' => Str::random(10),
            'text_en' => Str::random(100),
            'text_ar' => Str::random(70),
            'Brief_en' => Str::random(30),
            'Brief_ar' => Str::random(25),
            'intro_en' => Str::random(15),
            'intro_ar' => Str::random(15),


            'icon'=> "bg-cta-img.jpg",
            'image1'=> "download.jpg",
            'image2'=> "fav-ico.png",
            'image3'=> "InvestIN-02.png",
            'background_image'=> "InvestIN-02.png",


        ]);
    }
}
