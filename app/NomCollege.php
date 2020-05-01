<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NomCollege extends Model
{
    //
    protected $primaryKey = 'nomcollege_id';

    public function position(){
        return $this->belongsTo('App/Position');
    }

    public function elect_class(){
        return $this->hasMany('App/ElectClass');
    }

    public function council(){
        return $this->belongsTo('App/Council');
    }

    public function elect_college(){
        return $this->belongsTo('App/ElectCollege');
    }
}
