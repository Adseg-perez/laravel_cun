<?php

use App\Marca;
use App\Producto;
use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'producto' => $faker->state,
        'tipo' => $faker->jobTitle,
        'caducidad' => $faker->date,
        'marca_id' => function() {
        	return factory(App\Marca::class)->create()->idmarca;
        }
    ];
});
