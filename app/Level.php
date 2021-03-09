<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $guarded = [];
    
    public function subjects() {
        return $this->hasMany('App\Subjects');
    }
    
    public function exams() {
        return $this->hasMany('App\Exam');
    }

    
}
