<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subscriber;
use Faker\Generator as Faker;

$factory->define(Subscriber::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->safeEmail,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'avatar_url' => 'https://i.pravatar.cc/100?img=)' . rand(1, 69),
    ];
});
