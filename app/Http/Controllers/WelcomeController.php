<?php namespace App\Http\Controllers;

use App\Admission_manager;
use App\AgentLap;
use App\ApplicationStatus;
use App\AwardingBody;
use App\CourseDetails;
use App\PaymentInfoMethodsOfPayment;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admissions.create')
            ->with('agent_names',AgentLap::lists('name', 'id'))
            ->with('admission_managers',Admission_manager::lists('name','id'))
            ->with('course_names',CourseDetails::lists('name','id'))
            ->with('awarding_bodies',AwardingBody::lists('acronym','id'))
            ->with('application_status',ApplicationStatus::lists('name','id'))
            ->with('method_of_payment',PaymentInfoMethodsOfPayment::lists('name','id'));
		//return view('welcome');
	}

}
