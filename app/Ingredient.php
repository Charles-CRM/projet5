<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function instructions() {
        return $this->belongsToMany('App\Instruction');
    }
}
