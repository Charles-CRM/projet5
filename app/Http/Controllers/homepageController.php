<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Recipe;

class homepageController extends Controller
{
    public function index() {
        $recipes = Recipe::where('is_published', true)->get();
        
        $layout = layoutController::show('Accueil');
        return view('homepage', ['layout' => $layout, 'recipes' => $recipes]);
    }
}
