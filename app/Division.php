<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    //
    protected $primaryKey = 'class_id';
    public function department(){
        return $this->belongsTo('App/Department');
    }

    public function student()
    {
        return $this->hasMany('App/Student');
    }

    public function teacher(){
        return $this->hasOne('App/Teacher');
    }
}
