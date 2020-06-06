<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'parent_id' => 0,
        'name' => $faker->name,
        'featured' => false,
        'slug' => $faker->slug
    ];
});
