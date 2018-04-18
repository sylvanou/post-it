<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 100),
        'title' => $faker->text(50),
        'body' => $faker->text(200),
        'cover_image' => 'noimage.jpg'
    ];
});
