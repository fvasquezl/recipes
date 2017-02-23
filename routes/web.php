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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('recipes','RecipesController');


Route::get('recipes/ingredients/create/{recipe}',[
        'uses'=>'IngredientsController@create',
        'as' => 'recipes.ingredients.create',
]);

Route::post('recipes/ingredients/store/{recipe}',[
    'uses'=>'IngredientsController@store',
    'as' => 'recipes.ingredients.store',
]);

///Route::resource('ingredients','IngredientsController');

