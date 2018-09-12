<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
    
    public function ingredients() {
        return $this->hasManyThrough('App\Ingredient', 'App\Preparation');
    }
    
    
    // ATTENTION : Fonction non-utilisée.
    public function first_photo() {
        $photo = $this->photos()->first();
        return $photo->file_path;
    }
    
    // Custom accessors
    
    public function getUpdatedAtAttribute($date) {
        /*return date("d/m/Y", $date->timestamp());*/
        /*return $date->timestamp();*/
        /*return $this->updated_at->timestamp();*/
        $date = substr($date, 0, 10);
        $dateParts = explode('-', $date);
        $date = $dateParts[2] . '/' . $dateParts[1] . '/' . $dateParts[0];
        return $date;
    }
    
    public function getPreparationTimeAttribute($time) {
        return $this->displayHours($time);
    }
    
    public function getRestTimeAttribute($time) {
        return $this->displayHours($time);
    }
    
    public function getCookingTimeAttribute($time) {
        return $this->displayHours($time);
    }
    
    
    
    // Custom functions
    
    public function displayHours(int $time) {
        if(intval($time / 60)) {
            $time = intval($time / 60) . 'h' . sprintf("%02d", ($time % 60));
        } else if($time) {
            $time = $time . ' min';
        } else {
            $time = false;
        }
        return $time;
    }
    
    
}
