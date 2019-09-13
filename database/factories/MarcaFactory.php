<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Marca;
use Faker\Generator as Faker;

$factory->define(App\Marca::class, function (Faker $faker) {
    return [
        'marca' =>$faker->company,
        'pais' =>$faker->country
    ];
});
