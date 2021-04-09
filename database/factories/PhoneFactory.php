<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Phone;
use App\User;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'number' => $faker->phoneNumber(11),
        'user_id' => factory(User::class)->create()->id,
    ];
});
