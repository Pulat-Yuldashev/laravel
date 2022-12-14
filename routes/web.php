<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/page', 'PostController@index');

Route::get('/place', 'MyPlaceController@clip');

Route::get('/post/create', 'PostController@create');
Route::get('/post/update', 'PostController@update');
Route::get('/post/delete', 'PostController@delete');

Route::get('/user/{id}/{name}', function($id, $name) {
    return 'Id: '.$id.' User: '.$name;
});
