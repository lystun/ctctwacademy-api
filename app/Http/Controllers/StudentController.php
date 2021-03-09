<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{

    public function allStudents(){

        $students = Student::all();
        return StudentResource::collection($students);

    }
}
