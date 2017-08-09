<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tovar_podcategory extends Model
{

    public function tovar_category()
    {
        return $this->belongsTo('App\Tovar_category');
    }

    public function tovars()
    {
        return $this->hasMany('App\Tovar');
    }

}
