<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Slider;
use Faker\Generator as Faker;

$factory->define(Slider::class, function (Faker $faker) {
    $title = $faker->sentence(rand(6,10), true);
    $image = $faker->imageUrl($width = 1920, $height = 720, 'cats');
    $path = $faker->sentence(rand(6,10), true);
    $desc = $faker->realText(rand(500, 1000));
    $isPublished = rand(1, 5) > 1;

    $data = [
        'title' => $title,
        'user_id' => (rand(1, 5) == 5) ? 1 : 2,
        'image' => $image,
        'path' => $path,
        'description' => $desc,
        'is_published' => $isPublished,
    ];

    return $data;
});
