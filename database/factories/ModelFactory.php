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

/*
We don't need users now, so we won't make any fac
*/
// $factory->define(App\User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//         'remember_token' => str_random(10),
//     ];
// });


$factory->define(App\Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'country' => $faker->country,
        'date_of_birth' => $faker->date       
    ];
});

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'sinopsis' => $faker->sentence,
        'published_in' => $faker->date,
        'img' => $faker->sentence . 'png',
        'author_id' => function() {
        	return factory('App\Author')->create()->id;
        }    
    ];
});
