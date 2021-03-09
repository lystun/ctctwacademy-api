<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $guarded = [];

    public function level() {
        return $this->belongsTo('App\Level');
    }

    public function topics() {
        return $this->hasMany('App\Topic');
    }

    public function teacher() {
        return $this->belongsTo('App\Teacher');
    }

    public function exam() {
        return $this->hasOne('App\Exam');
    }

}
