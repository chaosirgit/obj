<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'mobile' => $faker->phoneNumber,
        'openid' => \App\User::setPass('haha123'),
        'nickname' => $faker->name(),
        'avatar' => $faker->imageUrl(480,480),
        'type' => random_int(1,4),
        'gender' => random_int(0,1),
        'created_at'=>$faker->date('Y-m-d H:i:s'),
    ];
});
