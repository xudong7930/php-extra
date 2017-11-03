<?php

use App\Epsido;
use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Epsido::class, function (Faker $faker) {
    return [
        'title' => "title",
        'epcert' => "content"
    ];
});
