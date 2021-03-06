<?php

use Illuminate\Http\Request;
use App\Article;
use App\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/






Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');


Route::group(['middleware' => 'auth:api'], function(){

    Route::get('/article', 'articles_controller@index');
    Route::get('/article/specific','articles_controller@show');
    Route::post('article', 'articles_controller@store');
    Route::post('article/upload', 'articles_controller@file_upload');
    Route::patch('article', 'articles_controller@update');
    Route::delete('article/delete', 'articles_controller@delete');

    //Route::match([ 'patch'], '/article/{id}', 'articles_controller@update');

});

// Route::get('articles/{id}', function($id) {
//     return Articles::find($id);
// });


//Route::resource();