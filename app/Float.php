<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Float extends Model
{


    public function house()
    {
        return $this->belongsTo('App/House');
    }

}
