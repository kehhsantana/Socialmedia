<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
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

    //Factory desenvolvida para usuários fictícios:
$factory->define(User::class, function (Faker $faker) {
    return [                     
    	'User'              => $faker->username,
        'Name'              => $faker->firstname,
        'Lastname'          => $faker->lastname,
        'Email'             => $faker->unique()->safeEmail,
        'Cellphone'         => $faker->phoneNumber,
        'Age'               => $faker->numberBetween($min = 18, $max = 40),
        'City'              => $faker->city,
        
    ];
});

