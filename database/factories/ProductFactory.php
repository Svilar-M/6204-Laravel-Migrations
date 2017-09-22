<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name(null),
        'description' => $faker->text(200),
        'price' => $faker->randomFloat(null, 0, 2 ),
        'stock' => $faker->randomDigit,
        'image' => $faker->imageUrl(250, 250),
        'category_id' => $faker->numberBetween(1, 50),
        'status' => $faker->randomDigitNotNull,
        'special' => $faker->randomDigitNotNull,
        'product_code' => $faker->ean8
    ];
});
