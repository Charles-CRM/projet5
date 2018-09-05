<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    public function preparation() {
        return $this->belongsTo('App\Preparation');
    }
    
    public function ingredients() {
        return $this->belongsToMany('App\Ingredient');
    }
}
