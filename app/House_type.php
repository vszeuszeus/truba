<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House_type extends Model
{

    public function houses()
    {
        return $this->hasMany('App/House');
    }

}
