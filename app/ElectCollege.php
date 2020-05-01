<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ElectCollege extends Model
{
    //
    protected $primaryKey = 'ecollege_id';
    public function nomination_college(){
        return $this->hasMany('App/NomCollege'); 
     }
}
