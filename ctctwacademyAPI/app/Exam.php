<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{

    public function subject() {
        return $this->belongsTo('App\Subject');
    }

    public function level() {
        return $this->belongsTo('App\Level');
    }

    

    


}
