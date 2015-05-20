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

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('checkSanAvailability','StudentsController@checkSanAvailability');
Route::get('/', 'UsersController@login');
Route::get('/login', 'UsersController@login');

Route::post('/login', 'UsersController@authenticate');

Route::group(array('before' => 'members_auth'), function()
{
	
Route::get('/export', 'StudentsController@export');

Route::get('/logout', 'UsersController@logout');
    Route::get('/students/{san}/more','StudentsController@more');
    Route::get('/students/verify','StudentsController@verify');
    Route::get('/students/{san}/amendment','StudentsController@amendment');

Route::resource('students','StudentsController');



});

Route::get('/test', function(){
    $results =  DB::table('students')->select('san')->get();
   // return $results;
    $rr = array();
    foreach($results as $result){
        $array[] = $result->san;
    }
    return $array;
});