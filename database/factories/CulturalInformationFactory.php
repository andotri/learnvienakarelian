<?php

use Faker\Generator as Faker;

$factory->define(App\CulturalInformation::class, function (Faker $faker) {
    $topic_names = ['Topic 1', 'Topic 2', 'Topic 3', 'Topic 4', 'Topic 5', 'Topic 6', 'Topic 7'];
    $topic_name = $topic_names[mt_rand(0, 6)];

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
