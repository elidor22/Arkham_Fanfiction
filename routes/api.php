<?php

use Illuminate\Http\Request;
use App\Article;

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


Route::get('/article', 'articles_controller@index');
Route::get('/article/{id}','articles_controller@show');
Route::post('article/{id}', 'articles_controller@store');
Route::put('article/{id}', 'articles_controller@update');
Route::delete('article/{id}', 'articles_controller@delete');

// Route::get('articles/{id}', function($id) {
//     return Articles::find($id);
// });


//Route::resource();