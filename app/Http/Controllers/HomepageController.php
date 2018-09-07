<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Recipe;

class HomepageController extends Controller
{
    public function index() {
        $title = 'Accueil - Site de recettes';
        
        $categories[] = Category::find(7);
        $categories[] = Category::find(5);
        $categories[] = Category::find(6);
        $categories[] = Category::find(4);
        $categories[] = Category::find(9);
        
        $recipes = Recipe::all();
        
        return view('homepage', ['title' => $title, 'categories' => $categories, 'recipes' => $recipes]);
    }
}
