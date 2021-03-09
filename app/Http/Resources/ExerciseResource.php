<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'topic' => $this->topic->title,
            'teacher' => User::find($this->user_id)->name,
            'question' => $this->question,
            'selections' => json_decode($this->selections),
            'answer' => $this->answer,
            'created_at' => $this->created_at->diffForHumans()
        ];

    }
}
