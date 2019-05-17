<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'title' => $faker->text($maxNbChars = 50),
        'content' => $faker->text($maxNbChars = 200)
    ];
});
