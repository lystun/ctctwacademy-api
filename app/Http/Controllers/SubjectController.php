<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use App\Http\Resources\SubjectResource;

class SubjectController extends Controller
{
    public function allSubjects() {
        $subjects = Subject::all();
        return SubjectResource::collection($subjects);
    }
}
