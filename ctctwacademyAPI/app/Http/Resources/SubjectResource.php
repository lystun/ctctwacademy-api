<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
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
            'title' => $this->title,
            'option' => $this->option,
            'level' => $this->level->name,
            'teacher' => User::find($this->teacher_id)->name,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
