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
        DB::table('success_stories')->insert([

            [
                'icon' => 'Investin-logo.png',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'name_en' => Str::random(20),
                'name_ar' => Str::random(20),
                'facbook_url' => Str::random(30),
            
                'text_en' => Str::random(30),
                'text_ar' => Str::random(25),

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'icon' => 'Investin-logo.png',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'name_en' => Str::random(20),
                'name_ar' => Str::random(20),
                'facbook_url' => Str::random(30),
            
                'text_en' => Str::random(30),
                'text_ar' => Str::random(25),

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'icon' => 'Investin-logo.png',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'name_en' => Str::random(20),
                'name_ar' => Str::random(20),
                'facbook_url' => Str::random(30),
            
                'text_en' => Str::random(30),
                'text_ar' => Str::random(25),

                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
