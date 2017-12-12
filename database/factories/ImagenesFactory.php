<?php

use Faker\Generator as Faker;

$factory->define(App\Imagenes::class, function (Faker $faker) {
  $filePath = storage_path('images');
    return [
      // 'nombre' => 'test_prod',
      'nombre' => $faker->image($filePath, 200, 150),
      'tipo_id' => $faker->biasedNumberBetween($min = 1, $max = 2, $function = 'sqrt'),
      'producto_id' => $faker->biasedNumberBetween($min = 1, $max = 3, $function = 'sqrt'),
      'post_id' => $faker->biasedNumberBetween($min = 1, $max = 20, $function = 'sqrt'),
      'user_id' => $faker->biasedNumberBetween($min = 1, $max = 20, $function = 'sqrt'),
    ];
});
