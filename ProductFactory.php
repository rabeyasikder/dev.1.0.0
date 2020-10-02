<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [

        'title' => $faker->title,
       'sku' => Str::random(10),
        'description' => $faker->text,

    ];
});
