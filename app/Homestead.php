<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestead extends Model
{

    public function houses()
    {
        return $this->hasMany('App/House');
    }

    public function podblock()
    {
        return $this->belongsTo('App/Podblock');
    }

}
