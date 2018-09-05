<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }
    
    public function author() {
        return $this->belongsTo('App\User');
    }
    
    public function preparations() {
        return $this->hasMany('App\Preparation');
    }
    
    public function photos() {
        return $this->hasMany('App\Photo');
    }
    
    public function comments() {
        return $this->hasMany('App\Comment');
    }
    
    public function flavours() {
        return $this->belongsToMany('App\Flavour');
    }
    
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
