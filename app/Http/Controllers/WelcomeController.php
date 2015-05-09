<?php namespace App\Http\Controllers;

use App\Admission_manager;
use App\AdmissionAgent;
use App\AdmissionSource;
use App\AgentLap;
use App\ApplicationStatus;
use App\AwardingBody;
use App\Country;
use App\CourseDetails;
use App\EducationalQualifications;
use App\Month;
use App\Nationality;
use App\PaymentInfoMethodsOfPayment;
use App\StudentIntake;
use App\Year;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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
	{// return DB::table('student_intakes')->join('years', 'years.id', '=', 'student_intakes.year')->select('student_intakes.id', 'years.name')->lists('student_intakes.id', 'years.name');
		return view('admissions.create')
            ->with('agent_names',AdmissionAgent::lists('name', 'id'))
            //To-Do
            ->with('admission_managers',Admission_manager::where('source_id','=',1)->lists('name','id'))
            ->with('course_names',CourseDetails::lists('name','id'))
            ->with('awarding_bodies',AwardingBody::lists('acronym','id'))
            ->with('application_status',ApplicationStatus::lists('name','id'))
            ->with('method_of_payment',PaymentInfoMethodsOfPayment::lists('name','id'))
            ->with('admission_source',AdmissionSource::lists('name','id'))
            ->with('intake_year',Year::lists('name','id'))
            ->with('countries',Country::lists('name','id'))
            ->with('education_qualifications',EducationalQualifications::lists('name','id'))
            ->with('nationalities',Nationality::lists('name','id'))
            ->with('intake_year',DB::table('student_intakes')->join('years', 'years.id', '=', 'student_intakes.year')->select('years.id', 'years.name')->groupBy('years.name')->lists( 'years.name','years.id'))
            //To-Do
            //->with('intake_month',Month::lists('name','id'));
            ->with('intake_month',DB::table('student_intakes')->join('months', 'months.id', '=', 'student_intakes.month')->select('student_intakes.id', 'months.name')->groupBy('months.name')->lists( 'months.name','student_intakes.id'));
		//return view('welcome');
        //DB::
	}

    public function agents_laps(){
        // Suenette To-Do
        if(Input::get('option') == 6 )
            return AgentLap::lists('name', 'id');
        else {
            return AdmissionAgent::where('admission_manager_id','=',Input::get('option'))->lists('name','id');
        }

    }

    public function admission_managers(){

        $agent_type = Input::get('option');
        return Admission_manager::where('source_id','=',$agent_type)->lists('name','id');

    }

    public function intake_month(){

        $intake_year = Input::get('option');
        return DB::table('student_intakes')
            ->join('months', 'months.id', '=', 'student_intakes.month')
            ->select('student_intakes.id', 'months.name')
            ->where('student_intakes.year','=',$intake_year)
            ->groupBy('months.name')
            ->lists( 'months.name','student_intakes.id');


    }

}
