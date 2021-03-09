<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Admin;
use App\Level;
use App\Student;
use App\Subject;
use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        // 'user_id' => User::all()->random()->get(),
        'user_id' => factory(App\User::class),
        'level' => Level::all()->random()->name,
        'option' => $faker->randomElement(['Science', 'Commercial', 'Art', 'All']) ,
        'avatar' => '2.png',
        'badges' => '2.png',
        'results' => "['jss1' => 34]"
    ];
});

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'avatar' => '2.png',
    ];
});

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'avatar' => '2.png',
        'user_id' => factory(App\User::class),
    ];
});
