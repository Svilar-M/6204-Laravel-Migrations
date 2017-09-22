<?php

use Faker\Generator as Faker;

$factory->define(App\Cart::class, function (Faker $faker) {
    return [
        'product' => $faker->randomDigitNotNull,
        'user' => $faker->randomDigitNotNull,
        'date' => $faker->date('Y-m-d','now'),
    ];
});
