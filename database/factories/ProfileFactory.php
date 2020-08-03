<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use App\Testing\File;
use App\User;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id'       => function () {
            return factory(User::class)->create()->id;
        },
        'phone_number'  => $faker->phoneNumber,
        'postal_code'   => $faker->postcode,
    ];
});

$factory->afterCreating(Profile::class, function (Profile $profile) {
    $profile->addMedia(File::image("profile-{$profile->id}->image.png"))
            ->toMediaCollection('profile-avatar');
});
