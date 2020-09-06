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

        $uploads_folder =  getcwd() .'/public/images/';
        
        if (!file_exists($uploads_folder)) {
            mkdir($uploads_folder, 0777, true);
        }

        DB::table('sector')->insert([
            'sector_name_ar' => Str::random(10),
            'sector_name_en' => Str::random(10),
            'Brief_en' => $faker_en->realText(),
            'Brief_ar' => $faker_ar->realText(),
            'text_en' => $faker_en->realText(),
            'text_ar' => $faker_ar->realText(),
            'intro_en' => $faker_en->realText(),
            'intro_ar' => $faker_ar->realText(),


            'icon'=> $faker_en->image($uploads_folder,400,300, null, true),
            'image1'=> $faker_en->image($uploads_folder,400,300, null, true),
            'image2'=> $faker_en->image($uploads_folder,400,300, null, true),
            'image3'=> $faker_en->image($uploads_folder,400,300, null, true),
            'background_image'=> $faker_en->image($uploads_folder,400,300, null, true),


        ],
        [
            'sector_name_ar' => Str::random(10),
            'sector_name_en' => Str::random(10),
            'Brief_en' => $faker_en->realText(),
            'Brief_ar' => $faker_ar->realText(),
            'text_en' => $faker_en->realText(),
            'text_ar' => $faker_ar->realText(),
            'intro_en' => $faker_en->realText(),
            'intro_ar' => $faker_ar->realText(),


            'icon'=> $faker_en->image($uploads_folder,400,300, null, true),
            'image1'=> $faker_en->image($uploads_folder,400,300, null, true),
            'image2'=> $faker_en->image($uploads_folder,400,300, null, true),
            'image3'=> $faker_en->image($uploads_folder,400,300, null, true),
            'background_image'=> $faker_en->image($uploads_folder,400,300, null, true),


        ],
        [
            'sector_name_ar' => Str::random(10),
            'sector_name_en' => Str::random(10),
            'Brief_en' => $faker_en->realText(),
            'Brief_ar' => $faker_ar->realText(),
            'text_en' => $faker_en->realText(),
            'text_ar' => $faker_ar->realText(),
            'intro_en' => $faker_en->realText(),
            'intro_ar' => $faker_ar->realText(),


            'icon'=> $faker_en->image($uploads_folder,400,300, null, true),
            'image1'=> $faker_en->image($uploads_folder,400,300, null, true),
            'image2'=> $faker_en->image($uploads_folder,400,300, null, true),
            'image3'=> $faker_en->image($uploads_folder,400,300, null, true),
            'background_image'=> $faker_en->image($uploads_folder,400,300, null, true),


        ]);
    }
}
