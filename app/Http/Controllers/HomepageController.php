<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $title = 'Accueil - Site de recettes';
        return view('homepage', ['title' => $title]);
    }
    
    public function category($category) {
        $title = $category . ' - Site de recettes';
        return view('homepage', ['title' => $title]);
    }
}
