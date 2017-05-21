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

Route::get('/chai', 'UserController@index')->middleware('throttle:4');

//文章
//Route::resource('/articles', 'ArticlesController');

Route::get('/article/{articles}',function (\App\Models\Articles $articles){
    return $articles;
});
