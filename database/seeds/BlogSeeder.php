<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 100; $i++) {
        DB::table('blog')->insert([

            [
                'image' => 'Investin-logo.png',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'blog_name_ar' => Str::random(20),
                'blog_name_en' => Str::random(20),
                'Brief_en' => Str::random(30),
                'Brief_ar' => Str::random(25),
                'text_en' => Str::random(30),
                'text_ar' => Str::random(25),

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'blog/blog-4.jpg',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'blog_name_ar' => Str::random(20),
                'blog_name_en' => Str::random(20),
                'Brief_en' => Str::random(30),
                'Brief_ar' => Str::random(25),
                'text_en' => Str::random(30),
                'text_ar' => Str::random(25),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'blog/blog-3.jpg',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'blog_name_ar' => Str::random(20),
                'blog_name_en' => Str::random(20),
                'Brief_en' => Str::random(30),
                'Brief_ar' => Str::random(25),
                'text_en' => Str::random(30),
                'text_ar' => Str::random(25),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
}
