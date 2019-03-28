<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        "name"=>$faker->word,
        "description"=>$faker->sentence,
        "categories"=> $faker->randomElement(['Cool', 'Informational', 'Educational', 'Vlog', 'Comedy', 'Popular']),
    ];
});
