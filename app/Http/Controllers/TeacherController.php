<?php

namespace App\Http\Controllers;

use App\User;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Resources\TeacherResource;

class TeacherController extends Controller
{

    public function allTeachers(){

        $teachers = Teacher::all();
        // $teachers = User::where('role_id', 2)->get();
        return TeacherResource::collection($teachers);

    }
}
