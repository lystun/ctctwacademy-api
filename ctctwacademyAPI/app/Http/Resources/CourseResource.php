<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            'slug' => $this->slug,
            'title' => $this->title,
            'topic' => $this->topic->title,
            'teacher' => User::find($this->user_id)->name,
            // 'teacher' => $this->user->name,
            'course_link1' => $this->course_link1,
            'course_link2' => $this->course_link2,
            'course_link3' => $this->course_link3,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
