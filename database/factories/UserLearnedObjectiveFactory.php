<?php

use Faker\Generator as Faker;

$factory->define(App\UserLearnedObjective::class, function (Faker $faker) {
    $user_id = mt_rand(1, 30);
    $learning_objective_id = mt_rand(1, 100);

    $skill_states = [null, true, false];

    $listening = $reading = $writing = null;
    $listening = $skill_states[mt_rand(0, 2)];
    if(!is_null($listening)) {
        $reading = $skill_states[mt_rand(0, 2)];
        if(!is_null($reading)) {
            $writing = $skill_states[mt_rand(0, 2)];
        }
    }

    $created_at = $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d');

    return [
        'user_id' => $user_id,
        'learning_objective_id' => $learning_objective_id,
        'listening' => $listening,
        'reading' => $reading,
        'writing' => $writing,
        'created_at' => $created_at,
        'updated_at' => $created_at,
    ];
});
