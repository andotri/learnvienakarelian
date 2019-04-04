<?php

use Faker\Generator as Faker;

$factory->define(App\LearningObjective::class, function (Faker $faker) {
    $topic_names = ['Topic 1', 'Topic 2', 'Topic 3', 'Topic 4', 'Topic 5', 'Topic 6', 'Topic 7'];
    $topic_name = $topic_names[mt_rand(0, 6)];

    $levels = ['easy', 'medium', 'hard'];
    $level = $levels[mt_rand(0, 2)];

    switch ($level) {
        case 'easy':
            $english = 'eee';
            $finnish = 'fff';
            $viena_karelian = 'vvv';
            break;
        case 'medium':
            $english = 'eee eee';
            $finnish = 'fff fff';
            $viena_karelian = 'vvv vvv';
            break;
        case 'hard':
            $english = 'eee eee eee';
            $finnish = 'fff fff fff';
            $viena_karelian = 'vvv vvv vvv';
            break;
    }

    if(mt_rand(0, 1) == 1) {
        $pictures = ['food-and-drink/apples.jpg', 'food-and-drink/bananas.jpg', 'food-and-drink/coffee.jpg', 'food-and-drink/milk.jpg'];
        $picture = $pictures[mt_rand(0, 3)];
    }
    else {
        $picture = null;
    }

    if(is_null($picture)) {
        $word_index = mt_rand(0, str_word_count($viena_karelian) - 1);
    }
    else {
        $word_index = null;
    }

    return [
        'topic_name' => $topic_name,
        'level' => $level,
        'english' => $english,
        'finnish' => $finnish,
        'viena_karelian' => $viena_karelian,
        'picture' => $picture,
        'word_index' => $word_index,
    ];
});
