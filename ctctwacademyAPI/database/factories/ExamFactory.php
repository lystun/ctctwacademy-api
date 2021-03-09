<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exam;
use App\User;
use App\Level;
use App\Subject;
use Faker\Generator as Faker;

$factory->define(Exam::class, function (Faker $faker) {

    $num = $faker->randomElement([1,2,3]);
    $selections = [ $faker->word(), $faker->word(), $faker->word(), $faker->word()  ];
    $answer = $faker->randomElement($selections);

    return [
        'subject_id' => Subject::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'level_id' => Level::all()->random()->id,
        'question' => $faker->paragraph($num),
        'selections' =>  json_encode($selections) ,
        'answer' => $answer,
        'option' => $faker->randomElement(['Science', 'Commercial', 'Art', 'All']),
        
    ];
});
