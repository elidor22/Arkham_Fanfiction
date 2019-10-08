<?php

use Illuminate\Http\Request;
use App\Articles;

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


Route::get('/articles', 'articles_controller@Get_Articles');
Route::post('/articles/store','articles_controller@store');
Route::patch('/articles/{article}','articles_controller@update');