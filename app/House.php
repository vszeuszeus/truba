<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    public function homestead()
    {
        return $this->belongsTo('App/Homestead');
    }

    public function constraction_status()
    {
        return $this->belongsTo('App/Constraction_status');
    }

    public function availability_status()
    {
        return $this->belongsTo('App/Availability_status');
    }

    public function house_type()
    {
        return $this->belongsTo('App/House_type');
    }

    public function floats()
    {
        return $this->hasMany('App/Float');
    }

}
