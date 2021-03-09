<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function subjects() {
        return $this->hasMany('App\Subject');
    }

    
}
