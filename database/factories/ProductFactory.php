<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id'        => function () {
            return factory(User::class)->create()->id;
        },
        'name'           => $faker->realText,
        'unit_weight'    => rand(20, 100),
        'unit_in_stock'  => rand(1, 10),
        'unit_price'     => rand(100, 300),
        'quantity_price' => rand(200, 300),
        'desc'           => $faker->realText(),
    ];
});
