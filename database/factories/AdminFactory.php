<?php

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'username' => $faker->userName,
        'password' => $faker->password,
        'created_at' => $faker->date('Y-m-d H:i:s'),
    ];
});
