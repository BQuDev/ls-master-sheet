<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Cartalyst\Sentry\SentryServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Http\FormRequest;
use Cartalyst\Sentry\Users;

class UsersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(){
        return view(('login'));
    }

    public function authenticate(){

        try
        {
            // Login credentials
            $credentials = array(

                'email'    =>Input::get('email'),
                'password' => Input::get('password')
            );

            // Authenticate the user
            $user = Sentry::authenticate($credentials, false);
            // return View::make('containerTrackingDetails.index');
            //return redirect()->action('WelcomeController@index');
            return Redirect::action('UsersController@login');
            //return Redirect::route('/');
            // return Redirect::action('DashboardsController@index');
            // return View::make('containers.index');
        }
        catch (Exception $e)
        {
            echo $e;
        }

    }

    public function logout(){
        Sentry::logout();
    }

}
