<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'post_id' => $faker->randomDigit,
        'reply' => $faker->text($maxNbChars = 200)
    ];
});
