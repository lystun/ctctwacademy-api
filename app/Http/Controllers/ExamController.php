<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;
use App\Http\Resources\ExamResource;

class ExamController extends Controller
{
    public function allExams(){

        $exams = Exam::all();
        return ExamResource::collection($exams);

    }
}
