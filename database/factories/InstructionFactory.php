<?php

use Faker\Generator as Faker;

$factory->define(App\Instruction::class, function (Faker $faker) {
    return [
        'text' => $faker->text(300),
        'preparation_id' => $faker->numberBetween(1, 70),
    ];
});
