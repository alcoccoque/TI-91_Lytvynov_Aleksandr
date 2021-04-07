<?php

namespace Nature;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
        return $this->belongsTo('Nature\User');
    }

    public function city(){
        return $this->belongsTo('Nature\City');
    }
}
