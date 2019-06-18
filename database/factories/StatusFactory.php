<?php

use Faker\Generator as Faker;

$factory->define(App\Statuses::class, function (Faker $faker) {
    return [
        'id' => rand(1,20),
        'user_id' => rand(323,953),
        'body' => $faker->paragraph(),
    ];
});
