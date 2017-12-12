<?php

use Faker\Generator as Faker;

$factory->define(App\Producto_Transaccion::class, function (Faker $faker) {
    return [
      'transaccion' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
      'producto' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
    ];
});
