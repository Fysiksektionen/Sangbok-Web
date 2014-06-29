<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/offline', function()
{
  return Response::json(array('online' => false));
});
Route::get('/online', function()
{
  return Response::json(array('online' => true));
});

Route::get('/song', 'SongController@index');
Route::get('/song/{id}', 'SongController@show');

Route::get('/chapter', 'ChapterController@index');
Route::get('/chapter/{id}', 'ChapterController@show');