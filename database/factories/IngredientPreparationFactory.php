<?php

use Faker\Generator as Faker;

$factory->define(App\IngredientPreparation::class, function (Faker $faker) {
    return [
        'ingredient_id' => $faker->numberBetween(1, 25),
        'preparation_id' => $faker->numberBetween(1, 70),
    ];
});
