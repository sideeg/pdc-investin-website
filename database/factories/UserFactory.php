<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];

});

$factory->define(App\User::class, function (Faker $faker) {
    $username=  $faker->unique()->name;;
    return [
        'blog_name_en' => $username,
    ];
    });

    $factory->define(App\session::class, function (Faker $faker) {
    
        $faker_ar = Faker\Factory::create('ar_JO');
        $faker_en = Faker\Factory::create('en_JO');

        $sectiors = App\sector::pluck('id')->toArray();
        
        $start = $faker->dateTimeBetween('next Monday', 'next Monday +7 days');
        $end = $faker->dateTimeBetween($start, $start->format('Y-m-d H:i:s').' +2 days');
        return [
            'session_name_ar' => $faker_ar->name,
            'session_name_en' => $faker_en->name,
            'start_date' => $start,
            'detials_ar' => $faker_ar->realText(),
            'detials_en' => $faker_en->realText(),
            'end_date' => $end,
            'total_num_of_shares' => $faker->numberBetween($min = 100, $max = 9000),
            'num_of_taken_share' => $faker->numberBetween($min = 1, $max = 9000),
            'sector_id' => $faker->randomElement($sectiors),



        ];
        });