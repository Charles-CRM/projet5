<?php

use Faker\Generator as Faker;

$factory->define(App\Recipe::class, function (Faker $faker) {
    
    
    $rest_time = 0;
    $is_resting = $faker->boolean(20);
    if ($is_resting) {
        $rest_time = $faker->numberBetween(0, 60) * 5;
    }
    
    return [
        
        'title' => $faker->sentence(4, true),
        'portions_nbr' => $faker->numberBetween(1, 8) * 2,
        'rating' => $faker->randomFloat(1, 0, 5),
        'votes_nbr' => $faker->numberBetween(0, 1000),
        'difficulty' => $faker->numberBetween(0, 5),
        'preparation_time' => $faker->numberBetween(1, 24) * 5,
        'rest_time' => $rest_time,
        'cooking_time' => $faker->numberBetween(0, 18) * 5,
        'is_published' => $faker->boolean(95),
        
        'category_id' => $faker->numberBetween(1, 10),
        'author_id' => $faker->numberBetween(1, 5),
        
    ];
});
