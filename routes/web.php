<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'homepageController@index')->name('homepage');
Route::get('/category/{category_id}', 'CategoryController@show')->name('category');

/*Route::get('/user', ['as' => 'user', function () {
    return 'Ici se trouvera la page du compte utilisateur.';
}])->name('user');*/

Route::get('/recette/{recipe_id}', 'RecipeController@show')->name('recipe');

Route::get('/login', ['as' => 'login', function () {
    return view('login');
}])->name('login');



// Pages d'essais

Route::get('/essai', function () {
    return view('essai');
})->name('essai');

Route::get('/ingredient/{ingredient_id}', 'IngredientController@show')->name('testshowingredient');
Route::post('/test/nouvelle_recette', 'RecipeController@create')->name('essaicreationrecette');







Auth::routes();


Route::middleware('auth')->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/test/nouvelle_recette', 'RecipeController@create')->name('essaicreationrecette');
});