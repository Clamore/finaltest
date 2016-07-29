<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('new','NewsController@index');
Route::get('new/create','NewsController@create');
Route::post('new','NewsController@store');
Route::get('new/{id}/show','NewsController@show');
Route::get('new/{type}/type','NewsController@filter');
