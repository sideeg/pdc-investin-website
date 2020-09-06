<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use \Faker\Factory;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', '1028M');
        $faker_ar = Faker\Factory::create('ar_JO');
        $faker_en = Faker\Factory::create('en_JO');

        for($i = 0; $i < 100; $i++) {
           

        DB::table('blog')->insert([

            [
               
                'image' => 'Investin-logo.png',
                'intro_en' => $faker_en->realText(),
                'intro_ar' => $faker_ar->realText(),
                'blog_name_ar' => $faker_ar->name,
                'blog_name_en' => $faker_en->name,
                'Brief_en' => $faker_ar->realText(),
                'Brief_ar' => $faker_en->realText(),
                'text_en' => $faker_en->realText(),
                'text_ar' => $faker_ar->realText(),

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'blog/blog-4.jpg',
                'intro_en' => $faker_en->realText(),
                'intro_ar' => $faker_ar->realText(),
                'blog_name_ar' => $faker_ar->name,
                'blog_name_en' => $faker_en->name,
                'Brief_en' => $faker_en->realText(),
                'Brief_ar' => $faker_ar->realText(),
                'text_en' => $faker_en->realText(),
                'text_ar' => $faker_ar->realText(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'blog/blog-3.jpg',
                'intro_en' => $faker_en->realText(),
                'intro_ar' => $faker_ar->realText(),
                'blog_name_ar' => $faker_ar->name,
                'blog_name_en' => $faker_en->name,
                'Brief_en' => $faker_en->realText(),
                'Brief_ar' => $faker_ar->realText(),
                'text_en' => $faker_en->realText(),
                'text_ar' => $faker_ar->realText(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
}
