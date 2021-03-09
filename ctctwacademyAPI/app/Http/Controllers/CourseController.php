<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Resources\CourseResource;

class CourseController extends Controller
{

    public function allCourses(){

        $courses = Course::all();
        return CourseResource::collection($courses);

    }


}
