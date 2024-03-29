<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class OurNetworkSeeder extends Seeder
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
        
        DB::table('our_network')->insert([

            [
                'logo' => 'Investin-logo.png',
                'intro_en' => $faker_en->realText(),
                'intro_ar' => $faker_ar->realText(30),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'logo' => 'blog/blog-2.jpg',
                'intro_en' => $faker_en->realText(),
                'intro_ar' => $faker_ar->realText(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'logo' => 'blog/blog-1.jpg',
                'intro_en' => $faker_en->realText(),
                'intro_ar' => $faker_ar->realText(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
