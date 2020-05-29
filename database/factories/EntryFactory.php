<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Entry;

use Faker\Generator as Faker;

$factory->define(Entry::class, function (Faker $faker) {
    return [
         'title'=> $faker->sentence(3),
         'content'=>$faker->text, 
         'user_id'=> 1,
        //
    ];
});
