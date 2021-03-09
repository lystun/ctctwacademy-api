<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Level;
use App\Topic;
use App\Subject;
use App\Teacher;
use Illuminate\Support\Str;
use Faker\Generator as Faker;



$factory->define(Level::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['JSS1', 'JSS2', 'JSS3', 'SSS1','SSS2', 'SSS3']),
    ];
});

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'level_id' => Level::all()->random()->id,
        'teacher_id' => Teacher::all()->random()->user_id,
        'option' => $faker->randomElement(['Science', 'Commercial', 'Art', 'All']) ,
        'exam_duration' => $faker->randomDigitNotNull().'0',
    ];
});

$factory->define(Topic::class, function (Faker $faker) {
    $title = $faker->word();

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'subject_id' => Subject::all()->random()->id,
    ];
});