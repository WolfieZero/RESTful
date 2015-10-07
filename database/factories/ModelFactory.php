<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->email,
        'password'       => str_random(10),
    ];
});


$factory->define(App\Datum::class, function (Faker\Generator $faker) {
    return [
        'name'      => $faker->sentence(mt_rand(1, 3)),
        'more'      => $faker->paragraph(mt_rand(1, 5)),
        'amount'    => $faker->randomFloat(),
        'confirmed' => $faker->boolean(75),
        'user_id'   => $faker->numberBetween(1, 5),
    ];
});
