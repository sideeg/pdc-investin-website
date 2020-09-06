<?php

use Illuminate\Database\Seeder;
use \Faker\Factory;

class seessionSeeder extends Seeder
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

        $sectiors = App\sector::pluck('id')->toArray();
        
        $start = $faker_en->dateTimeBetween('next Monday', 'next Monday +7 days');
        $end = $faker_en->dateTimeBetween($start, $start->format('Y-m-d H:i:s').' +2 days');
        
        for($i = 0; $i < 100; $i++) {
        DB::table('session')->insert([
            'session_name_ar' => $faker_ar->name,
            'session_name_en' => $faker_en->name,
            'start_date' => $start,
            'detials_ar' => $faker_ar->realText(),
            'detials_en' => $faker_en->realText(),
            'end_date' => $end,
            'total_num_of_shares' => $faker_en->numberBetween($min = 100, $max = 9000),
            'num_of_taken_share' => $faker_en->numberBetween($min = 1, $max = 9000),
            'sector_id' => $faker_en->randomElement($sectiors)
        ]);
    }
}
}
