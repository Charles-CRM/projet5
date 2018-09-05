<?php

use Faker\Generator as Faker;

$factory->define(App\RecipeTag::class, function (Faker $faker) {
    return [
        'recipe_id' => $faker->numberBetween(1, 30),
        'tag_id' => $faker->numberBetween(1, 25),
    ];
});
