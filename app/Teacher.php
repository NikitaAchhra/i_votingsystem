<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function division(){
        return $this->belongsTo('App/Division');
    }

    public function department(){
        return $this->belongsTo('App/Department');
    }

    public function user(){
        return $this->belongsTo('App/User');
    }
}
