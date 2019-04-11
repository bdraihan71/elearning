<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

    public function modules(){
        return $this->hasMany('App\Module');
    }

    public function teacher(){
        return $this->belongsTo('App\Teacher');
    }
}
