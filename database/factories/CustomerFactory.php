<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Customer;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'uniquecode' => $faker->sentence(),
        'name' => $faker->name(),
        'username' => $faker->sentence(),
        'birthdate' => $faker->dateTimeBetween('-30 years', 'now')
    ];
});