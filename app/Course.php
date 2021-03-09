<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function topic(){
        return $this->belongsTo('App\Topic');
    }
}
