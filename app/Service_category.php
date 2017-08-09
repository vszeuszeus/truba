<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_category extends Model
{
    public function services()
    {
        return $this->hasMany('App\Service');
    }
}
