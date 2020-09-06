<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AboutUsSeeder extends Seeder
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
        for($i = 0; $i < 10; $i++) {
        DB::table('about_us')->insert([

            [
                'intro_en' => $faker_en->realText(20),
                'intro_ar' => $faker_ar->realText(20),
                'action_ar' => $faker_ar->realText(30),
                'action_en' => $faker_en->realText(30),
                'text_en' => $faker_en->realText(),
                'text_ar' => $faker_ar->realText(),

                'date' => date('Y'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'intro_en' => $faker_en->realText(20),
                'intro_ar' => $faker_ar->realText(20),
                'action_ar' => $faker_ar->realText(30),
                'action_en' => $faker_en->realText(30),
                'text_en' => $faker_en->realText(),
                'text_ar' => $faker_ar->realText(),

                'date' => date('Y'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'intro_en' => $faker_en->realText(20),
                'intro_ar' => $faker_ar->realText(20),
                'action_ar' => $faker_ar->realText(30),
                'action_en' => $faker_en->realText(30),
                'text_en' => $faker_en->realText(),
                'text_ar' => $faker_ar->realText(),
                'date' => date('Y'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
    
}
