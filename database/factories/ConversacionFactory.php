<?php

use Faker\Generator as Faker;

$factory->define(App\Conversacion::class, function (Faker $faker) {
    return [
      'user_id' => $faker->biasedNumberBetween($min = 1, $max = 20, $function = 'sqrt'),
      'receptor_id' => $faker->biasedNumberBetween($min = 1, $max = 20, $function = 'sqrt'),

    ];
});
