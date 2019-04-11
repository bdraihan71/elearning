<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function course(){
        return $this->belongsTo('App\Course');
    }
}
