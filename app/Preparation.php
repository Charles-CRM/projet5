<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparation extends Model
{
    protected $fillable = ['recipe_id', 'name', 'instructions',];
    public function recipe() {
        return $this->belongsTo('App\Recipe');
    }
    
    public function ingredients() {
        return $this->belongsToMany('App\Ingredient');
    }
}
