<?php

use Faker\Generator as Faker;

$factory->define(App\Preparation::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4, true),
        
        'recipe_id' => $faker->numberBetween(1, 30),
    ];
});
