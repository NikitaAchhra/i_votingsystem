<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectClass extends Model
{
    //
    protected $primaryKey = 'eclass_id';
    public function nomination_class(){
       return $this->hasMany('App/NomClass'); 
    }

    public function nomination_college(){
        return $this->belongsTo('App/NomCollege');
    }
}
