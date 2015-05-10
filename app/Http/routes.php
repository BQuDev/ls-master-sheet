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


//form login
Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@authenticate');
Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index');

Route::group(array('before' => 'members_auth'), function()
{
//Route::get('/', 'WelcomeController@index');
Route::get('/', 'WelcomeController@index');
Route::resource('student', 'StudentController');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
Route::get('agent_type/dropdown', function(){

    /*$models = $maker->models();
    return Response::eloquent($models->get(['id','name']));
});*/

Route::get('agent_type/dropdown', 'WelcomeController@admission_managers');
Route::get('admission_manager/dropdown', 'WelcomeController@agents_laps');
//Route::get('agent_type/dropdown', 'WelcomeController@agents_laps');
Route::get('intake_month/dropdown', 'WelcomeController@intake_month');
Route::get('/logout', 'UsersController@logout');

});