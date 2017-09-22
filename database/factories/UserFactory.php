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
        'user_name' => $faker->firstName(null),
        'user_surname' => $faker->lastName,
        'user_email' => $faker->email,
        'user_password' => $faker->password,
        'user_status' => $faker->randomDigitNotNull,
    ];
});