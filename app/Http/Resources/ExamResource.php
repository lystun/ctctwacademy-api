<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class ExamResource extends JsonResource
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
            'subject' => $this->subject->title,
            'teacher' => User::find($this->user_id)->name,
            'option' => $this->option,
            'level' => $this->level->name,
            'duration' => $this->subject->exam_duration,
            'min_score' => $this->subject->exam_min_score,
            'question' => $this->question,
            'selections' => json_decode($this->selections),
            'answer' => $this->answer,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
