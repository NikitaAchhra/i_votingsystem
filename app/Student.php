<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    public $table='students';
    protected $primaryKey = 'stud_id';
    protected $fillable = [
        'class_id_fk', 'dept_id_fk',
    ];

    public function division(){
        return $this->belongsTo('App/Division');
    }

    public function department(){
        return $this->belongsTo('App/Department');
    }

    public function nomination_class(){
        return $this->belongsTo('App/NomClass');
    }

    public function user(){
        return $this->belongsTo('App/User');
    }
}
