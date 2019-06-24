<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function Fee(){
        return $this->hasMany('App\Fee', 'id');
    }
}
