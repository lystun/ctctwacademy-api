<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded = [];

    public function subject() {
        return $this->belongsTo('App\Subject');
    }

    public function courses(){
        return $this->hasMany('App\Course');
    }

    public function exercises(){
        return $this->hasMany('App\Exercise');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

}
