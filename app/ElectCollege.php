<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectCollege extends Model
{
    //
    public function nomination_college(){
        return $this->hasMany('App/NomCollege'); 
     }
}
