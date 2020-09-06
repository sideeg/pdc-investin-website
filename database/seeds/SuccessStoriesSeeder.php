<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class SuccessStoriesSeeder extends Seeder
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

        DB::table('success_stories')->insert([

            [
                'icon' => 'Investin-logo.png',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'name_en' => $faker_en->name,
                'name_ar' =>  $faker_ar->name,
                'facbook_url' => Str::random(30),
            
                'text_en' => $faker_en->realText(),
                'text_ar' => $faker_ar->realText(),

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'icon' => 'Investin-logo.png',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'name_en' => $faker_en->name,
                'name_ar' => $faker_ar->name,
                'facbook_url' => Str::random(30),
            
                'text_en' => $faker_en->realText(),
                'text_ar' => $faker_ar->realText(),

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'icon' => 'Investin-logo.png',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'name_en' => $faker_en->name,
                'name_ar' => $faker_ar->name,
                'facbook_url' => Str::random(30),
            
                'text_en' => $faker_en->realText(),
                'text_ar' => $faker_ar->realText(),
            
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
