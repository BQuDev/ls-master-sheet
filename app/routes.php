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


Route::get('checkSanAvailability','StudentsController@checkSanAvailability');
Route::get('/', 'UsersController@login');
Route::get('/login', 'UsersController@login');

Route::post('/login', 'UsersController@authenticate');

Route::group(array('before' => 'members_auth'), function()
{
	
Route::get('/export', 'StudentsController@export');

Route::get('/logout', 'UsersController@logout');
Route::resource('students','StudentsController');
});