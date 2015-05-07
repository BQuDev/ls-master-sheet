<?php namespace App\Providers;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Cartalyst\Sentry\Facades\Laravel\Sentry;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		//
		
		parent::boot($router);
	
		/***** Larave sentry ****/
		
		// Check if someone is already logged in
        Route::filter('members_auth',function(){
        //If already logged in go to dashboard or else login
            if(!Sentry::check()){
                return Redirect::to('/student');
            }
        });
		
		/***** Larave sentry ****/
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
