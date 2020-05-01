<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $primaryKey = 'dept_id';
    public function class()
    {
        return $this->hasMany('App/Division');
    }

    public function student()
    {
        return $this->hasMany('App/Student');
    }

    public function teacher()
    {
        return $this->hasMany('App/Teacher');
    }
}
