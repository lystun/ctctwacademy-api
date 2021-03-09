<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;
use App\Http\Resources\ExerciseResource;

class ExerciseController extends Controller
{
    
    public function allExercises(){

        $exercises = Exercise::all();
        return ExerciseResource::collection($exercises);

    }

}
