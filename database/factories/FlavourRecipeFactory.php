<?php

use Faker\Generator as Faker;

$factory->define(App\FlavourRecipe::class, function (Faker $faker) {
    return [
        'flavour_id' => $faker->numberBetween(1, 25),
        'recipe_id' => $faker->numberBetween(1, 30),
    ];
});
