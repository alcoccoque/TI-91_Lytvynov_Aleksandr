<?php

namespace Nature;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function city(){
        return $this->belongsTo('Nature\City');
    }
}
