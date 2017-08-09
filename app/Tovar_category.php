<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tovar_category extends Model
{
    public function tovar_podcategories()
    {
        return $this->hasMany('App\Tovar_podcategory');
    }
}
