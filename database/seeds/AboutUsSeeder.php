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
        for($i = 0; $i < 10; $i++) {
        DB::table('about_us')->insert([

            [
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'action_ar' => Str::random(30),
                'action_en' => Str::random(25),
                'text_en' => Str::random(30),
                'text_ar' => Str::random(25),

                'date' => date('Y'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'action_ar' => Str::random(30),
                'action_en' => Str::random(25),
                'text_en' => Str::random(30),
                'text_ar' => Str::random(25),

                'date' => date('Y'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'action_ar' => Str::random(30),
                'action_en' => Str::random(25),
                'text_en' => Str::random(30),
                'text_ar' => Str::random(25),

                'date' => date('Y'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
    
}