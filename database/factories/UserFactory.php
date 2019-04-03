<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    $languages = ['en', 'fi'];
    $language = $languages[mt_rand(0, 1)];

    return [
        'name' => $faker->name,
        'language' => $language,
        'ip_address_created' =>$faker->ipv4,
        'ip_address_updated' =>$faker->ipv4,
    ];
});
