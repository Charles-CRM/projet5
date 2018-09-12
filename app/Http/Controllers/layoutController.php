<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class layoutController extends Controller
{
    static function show(string $titlePrefix)
    {
        $title = $titlePrefix . ' - Site de recettes';
        
        $categories[] = Category::find(7);
        $categories[] = Category::find(5);
        $categories[] = Category::find(6);
        $categories[] = Category::find(4);
        $categories[] = Category::find(9);
        
        $layout = ['title' => $title, 'categories' => $categories];
        
        return $layout;
    }
}
