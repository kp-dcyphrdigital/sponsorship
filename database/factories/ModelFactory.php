<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Sponsorable::class, function (Faker $faker) {
    return [
    ];
});

$factory->define(App\SponsorableSlot::class, function (Faker $faker) {
    return [
        'publish_date' => now()->addMonths(1),
    ];
});

$factory->define(App\Purchase::class, function (Faker $faker) {
    return [
    ];
});
