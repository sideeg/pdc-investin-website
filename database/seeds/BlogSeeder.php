<?php

use Illuminate\Database\Seeder;

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
                'image' => 'Investin-logo',
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
                'image' => 'blog/blog-4',
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
                'image' => 'blog/blog-3',
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
