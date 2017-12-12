<?php

use Faker\Generator as Faker;

$factory->define(App\Mensajes::class, function (Faker $faker) {
    return [
      'contenido' => $faker->text($maxNbChars = 140),
      'conversacion_id' => $faker->biasedNumberBetween($min = 10, $max = 80, $function = 'sqrt'),
      'imagenes' => $faker->biasedNumberBetween($min = 10, $max = 80, $function = 'sqrt'),
    ];
});
