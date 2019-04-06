<?php

use Faker\Generator as Faker;

$factory->define(App\CulturalInformation::class, function (Faker $faker) {
    $topic_names = ['food_and_drink', 'clothing', 'furniture', 'season', 'number', 'body', 'days-and-months'];
    $topic_name = $topic_names[mt_rand(0, 1)];

    $english = $faker->text;
    $finnish = $faker->text;
    $picture = 'logo.png';

    return [
        'topic_name' => $topic_name,
        'english' => $english,
        'finnish' => $finnish,
        'picture' => $picture,
    ];
});
