<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $title = $faker->sentence,
        'slug' => \Illuminate\Support\Str::slug($title),
        'description' => $faker->text,
        'category_id' => factory(\App\Category::class)->create()->id
    ];
});
