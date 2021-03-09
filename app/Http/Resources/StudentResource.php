<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'level' => $this->level,
            'option' => $this->option,
            'avatar' => $this->avatar,
            'badges' => $this->badges,
            'results' => $this->results,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
