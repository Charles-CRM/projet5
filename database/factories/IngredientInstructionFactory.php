<?php

use Faker\Generator as Faker;

$factory->define(App\IngredientInstruction::class, function (Faker $faker) {
    return [
        'ingredient_id' => $faker->numberBetween(1, 25),
        'instruction_id' => $faker->numberBetween(1, 175),
    ];
});
