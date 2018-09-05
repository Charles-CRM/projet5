<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'message' => $faker->text(500),
        'date' => $faker->dateTimeThisDecade(),
        'votes_up' => $faker->numberBetween(0, 1000),
        'votes_down' => $faker->numberBetween(0, 1000),
        
        'recipe_id' => $faker->numberBetween(1, 30),
        'author_id' => $faker->numberBetween(1, 5),
    ];
});
