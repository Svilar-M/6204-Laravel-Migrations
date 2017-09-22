<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name(null),
        'description' => $faker->sentence(100),
        'image' => $faker->imageUrl(250, 250),
    ];
});
