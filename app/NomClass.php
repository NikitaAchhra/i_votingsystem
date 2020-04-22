<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NomClass extends Model
{
    //
    public function student()
    {
        return $this->hasMany('App/Student');
    }

    public function council(){
        return $this->belongsTo('App/Council');
    }

    public function elect_class(){
        return $this->belongsTo('App/ElectClass');
    }


}
