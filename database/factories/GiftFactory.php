<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Gift;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Gift::class, function (Faker $faker) {
    $name = $faker->sentence(rand(4,8), true);
    $content = $faker->realText(rand(800, 3000));
    $isPublished = rand(1,5) > 1;

    $createdAt = $faker->dateTimeBetween('-3 months', '-2 months');

    $data = [
        'name' => $name,
        'slug' => Str::slug($name),
        'excerpt' => $faker->text(rand(20, 100)),
        'content' => $content,
        'is_published' => $isPublished,
        'published_at' => $isPublished ? $faker->dateTimeBetween('-2 months', '-2 days') : null,
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
    ];

    return $data;
});
