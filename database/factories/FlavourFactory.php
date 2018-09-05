<?php

use Faker\Generator as Faker;

$factory->define(App\Flavour::class, function (Faker $faker) {
    return [
        'name'  => $faker->word,
    ];
});
