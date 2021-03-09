<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Resources\TopicResource;

class TopicController extends Controller
{
    public function allTopics(){

        $topics = Topic::all();
        return TopicResource::collection($topics);

    }
}
