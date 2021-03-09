<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $guarded = [];

    public function topic(){
        return $this->belongsTo('App\Topic');
    }
}
