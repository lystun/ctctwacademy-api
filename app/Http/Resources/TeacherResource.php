<?php

namespace App\Http\Resources;

use App\Subject;
use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
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
            'name' => $this->user->name,
            'email' => $this->user->email,
            'subjects' => SubjectResource::collection(Subject::where('teacher_id', $this->user->id)->get()),
            'avatar' => $this->avatar,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
