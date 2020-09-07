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


            'icon'=> "02d5dd7707f341095e1f8e5a20bc6ab2",
            'image1'=> 'a107e17d9fc11151d8343a3ae28ebdc0',
            'image2'=> 'a6f18715b961eab511cc048667328ed4',
            'image3'=> 'a1a28d9d9701e814810605411c3aad20',
            'background_image'=> '7500232c44cd5d6985c0703c35132e25',
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


            'icon'=> "02d5dd7707f341095e1f8e5a20bc6ab2",
            'image1'=> '8d48c2a53ed137054f297be0b9660c0b',
            'image2'=> 'Investin-logo.png',
            'image3'=> '8b7121787f97c8f5d2b3f27e726c1680',
            'background_image'=> '8e02094d3a0491dce262a5a820e9a0e7',


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


            
            'icon'=> "home/bg-blog.jpg",
            'image1'=> 'blog/blog-2.jpg',
            'image2'=> 'Investin-logo.png',
            'image3'=> 'Investin-logo.png',
            'background_image'=> 'blog/blog-4.jpg',

            // 'icon'=> $faker_en->image($uploads_folder,400,300, null, true),
            // 'image1'=> $faker_en->image($uploads_folder,400,300, null, true),
            // 'image2'=> $faker_en->image($uploads_folder,400,300, null, true),
            // 'image3'=> $faker_en->image($uploads_folder,400,300, null, true),
            // 'background_image'=> $faker_en->image($uploads_folder,400,300, null, true),


        ]);
    }
}
