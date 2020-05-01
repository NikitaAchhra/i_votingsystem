<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    protected $primaryKey = 'pos_id';
    public function nomination_college()
    {
        return $this->hasMany('App/NomCollege');
    }
}
