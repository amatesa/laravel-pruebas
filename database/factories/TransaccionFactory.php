<?php

use Faker\Generator as Faker;

$factory->define(App\Transaccion::class, function (Faker $faker) {
  $devuelto = $faker->date($format = 'Y-m-d', $max = 'now');
    return [
      'fecprestado' => $faker->date($format = 'Y-m-d', $max = $devuelto),
      'fecdevuelto' => $devuelto,
      'producto_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
      'plazo' => $faker->biasedNumberBetween($min = 1, $max = 20, $function = 'sqrt'),
      'valoracion' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
      'estado_id' => $faker->biasedNumberBetween($min = 1, $max = 3, $function = 'sqrt'),
      'user_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
      'receptor_id' => $faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
    ];
});
