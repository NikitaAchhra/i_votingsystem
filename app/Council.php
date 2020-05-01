<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Council extends Model
{
    //
    protected $primaryKey = 'coun_id';
    public function nomination_class(){
        return $this->hasMany('App/NomClass');
    } 

    public function nomination_college(){
        return $this->hasMany('App/NomCollege');
    }
}
