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
        DB::table('our_network')->insert([

            [
                'logo' => 'Investin-logo.png',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'logo' => 'blog/blog-2.jpg',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'logo' => 'blog/blog-1.jpg',
                'intro_en' => Str::random(15),
                'intro_ar' => Str::random(20),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]

        ]);
    }
}
