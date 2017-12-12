<?php

use Faker\Generator as Faker;

$factory->define(App\Postcomentarios::class, function (Faker $faker) {
    return [
      'comentario' => $faker->text($maxNbChars = 140),
      'user_id' => $faker->biasedNumberBetween($min = 10, $max = 80, $function = 'sqrt'),
      'post' => $faker->biasedNumberBetween($min = 10, $max = 80, $function = 'sqrt'),
    ];
});
