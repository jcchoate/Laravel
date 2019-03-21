<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        "name"=>$faker->word,
        "description"=>$faker->sentence,
        "categories"=> ['Cool', 'Informational', 'Educational', 'Vlog', 'Comedy', 'Popular'][rand(0,5)],
    ];
});
