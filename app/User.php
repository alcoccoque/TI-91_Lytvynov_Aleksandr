<?php

namespace Nature;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    public function posts(){
        return $this->hasMany('Nature\Post');
    }

    public function feedbacks(){
        return $this->hasMany('Nature\Feedback');
    }

    public function isAdmin(){
        return $this->type === self::ADMIN_TYPE;
    }

    public function cities(){
        return $this->belongsToMany('Nature\City');
    }

    public function comments(){
        return $this->hasMany('Nature\Comment');
    }
}
