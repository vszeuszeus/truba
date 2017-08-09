<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tovar extends Model
{
    public function tovar_podcategory()
    {
        return $this->belongsTo('App\Tovar_podcategory');
    }
}
