<?php

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

$factory->define(App\CreditItems::class, function (Faker $faker) {
    return [
        'abbrev' => $faker->word,
        'name' => $faker->word,
        'credits' => $faker->numberBetween(1.25, 15),
        'type' => $faker->numberBetween(0, 6),
        'status' => $faker->numberBetween(0, 3),
    ];
});
