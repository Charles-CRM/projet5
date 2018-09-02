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

Route::get('/', 'HomepageController@index')->name('homepage');
Route::get('/category/{category}', 'HomepageController@category')->name('category');

Route::get('/user', ['as' => 'user', function () {
    return 'Ici se trouvera la page du compte utilisateur.';
}])->name('user');

Route::get('/recipe/{title}', function ($title) {
    return view('recipe', ['title' => $title]);
})->name('recipe');

Route::get('/login', ['as' => 'login', function () {
    return view('login');
}])->name('login');