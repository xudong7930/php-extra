<?php

use App\Lesson;
use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'title' => "title",
        'body' => "content"
    ];
});
