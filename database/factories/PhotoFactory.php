<?php

use Faker\Generator as Faker;

$factory->define(App\Photo::class, function (Faker $faker) {
    return [
        'file_path' => $faker->imageUrl(900, 600, 'food'),
        
        'recipe_id' => $faker->numberBetween(1, 30),
        'author_id' => $faker->numberBetween(1, 5),
    ];
});
