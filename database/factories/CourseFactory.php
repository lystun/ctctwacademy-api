<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Topic;
use App\Course;
use App\Comment;
use App\Exercise;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $title = $faker->word();

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'topic_id' => Topic::all()->random()->id,
        'user_id' => User::all()->random()->id, //teacher uploading the course
        'course_link1' => $faker->url(),
        'course_link2' => $faker->url(),
    ];
});

$factory->define(Exercise::class, function (Faker $faker) {

    $num = $faker->randomElement([1,2,3]);
    $selections = [ $faker->word(), $faker->word(), $faker->word(), $faker->word()  ];
    $answer = $faker->randomElement($selections);

    return [
        'topic_id' => Topic::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'question' => $faker->paragraph($num),
        'selections' =>  json_encode($selections) ,
        'answer' => $answer,
    ];
});

$factory->define(Comment::class, function (Faker $faker) {

    $num = $faker->randomElement([1,2,3]);

    return [
        'topic_id' => Topic::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'question' => $faker->paragraph($num),
        'reply' => $faker->paragraph($num),
    ];
});
