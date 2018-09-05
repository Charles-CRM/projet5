<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function preparations() {
        return $this->belongsToMany('App\Preparation');
    }
    
    public function recipes() {
        return $this->hasManyThrough('App\Preparation', 'App\Recipe');
    }
}
