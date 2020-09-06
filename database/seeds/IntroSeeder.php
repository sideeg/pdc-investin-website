<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class IntroSeeder extends Seeder
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

        DB::table('intro')->insert([
            
            [
                'icon' => 'home/bg-blog.jpg',
                
                'intro_en' => $faker_en->realText(),
                'intro_ar' => $faker_ar->realText(),
                'section_name_en' =>  $faker_en->name,
                'section_name_ar' =>  $faker_ar->name,
                

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'icon' => 'home/bg-blog.jpg',
                'intro_en' => Str::random(35),
                'intro_ar' => Str::random(20),
                'section_name_en' => Str::random(20),
                'section_name_ar' => Str::random(20),
                

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'icon' => 'home/bg-blog.jpg',
                'intro_en' => Str::random(35),
                'intro_ar' => Str::random(20),
                'section_name_en' => Str::random(20),
                'section_name_ar' => Str::random(20),
                

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
