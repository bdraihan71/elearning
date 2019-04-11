<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function course(){
        return $this->hasMany('App\Course');
    }
}
