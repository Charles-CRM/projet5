<?php

use Faker\Generator as Faker;

$factory->define(App\Preparation::class, function (Faker $faker) {
    $name = $faker->sentence(2, true);
    $name = substr($name, 0, strlen($name) - 1);
        
    return [
        'name' => $name,
        
        'recipe_id' => $faker->numberBetween(1, 30),
    ];
});
