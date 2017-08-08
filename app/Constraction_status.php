<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constraction_status extends Model
{

    public function houses()
    {
        return $this->hasMany('App/House');
    }

}
