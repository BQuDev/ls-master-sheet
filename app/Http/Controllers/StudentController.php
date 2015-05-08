<?php namespace App\Http\Controllers;

use App\BquApplicationData;
use App\ContactInformation;
use App\CourseDetails;
use App\CourseEnrolment;
use App\EducationalQualifications;
use App\EnglishLangLevel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PaymentInfo;
use App\PaymentInfoMetadata;
use App\StudentContactInformation;
use App\StudentContactInformationKinDetailes;
use App\StudentContactInformationOnline;
use App\StudentContactInformationType;
use App\StudentEducationalQualification;
use App\StudentSource;
use App\WorkExperience;
use Input;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StudentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return 'index';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return 'index';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        //return Input::all();
/*
        $v = Validator::make(Input::all(), [
            'title' => 'required'
        ]);


        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }*/
            //return Input::all();
        //$profilebox = implode(',', Input::get('intake'));
        //return json_encode(Input::get('payment_status'));
        //return json_encode(Input::get('course_fees'));
            // Saving Student
            $student = new Student();
            $student->title = Input::get('title');
            $student->initials_1 = Input::get('initials_1');
            $student->initials_2 = Input::get('initials_2');
            $student->initials_3 = Input::get('initials_3');
            $student->forename_1 = Input::get('forename_1');
            $student->forename_2 = Input::get('forename_2');
            $student->forename_3 = Input::get('forename_3');
            $student->surname = Input::get('surname');
            $student->gender = Input::get('gender');
            $student->date_of_birth = Input::get('date_of_birth_date') . '-' . Input::get('date_of_birth_month') . '-' . Input::get('date_of_birth_year');
            $student->nationality = Input::get('nationality');
            $student->passport = Input::get('passport');
            $student->save();

            $student_id = $student->id;
/*
            // Saving contact details
            $contact_details = new ContactInformation();
            $contact_details->uk_street = Input::get('uk_street');
            $contact_details->uk_city = Input::get('uk_city');
            $contact_details->uk_post_code = Input::get('uk_post_code');
            $contact_details->uk_mobile = Input::get('uk_mobile');
            $contact_details->uk_landline = Input::get('uk_landline');


            $contact_details->address_1 = Input::get('address_1');
            $contact_details->address_2 = Input::get('address_2');
            $contact_details->city = Input::get('city');
            $contact_details->post_code = Input::get('post_code');
            $contact_details->country = Input::get('country');
            $contact_details->mobile = Input::get('mobile_1').Input::get('mobile_2').Input::get('mobile_3').Input::get('mobile');
            $contact_details->landline = Input::get('landline_1').Input::get('landline_2').Input::get('landline_3').Input::get('landline');
            $contact_details->email = Input::get('email');
            $contact_details->alternative_email = Input::get('alternative_email');

            $contact_details->facebook = Input::get('facebook');
            $contact_details->linkedin = Input::get('linkedin');
            $contact_details->twitter = Input::get('twitter');
            $contact_details->other_social = Input::get('other_social');


            $contact_details->next_of_kin_title = Input::get('next_of_kin_title');
            $contact_details->next_of_kin_forename = Input::get('next_of_kin_forename');
            $contact_details->next_of_kin_surname = Input::get('next_of_kin_surname');
            $contact_details->next_of_kin_telephone = Input::get('next_of_kin_telephone_1').Input::get('next_of_kin_telephone_2').Input::get('next_of_kin_telephone_3').Input::get('next_of_kin_telephone');
            $contact_details->next_of_kin_email = Input::get('next_of_kin_email');

            $contact_details->san = Input::get('san');
            $contact_details->student_id = $student_id;

            $contact_details->save();
*/

        //Student Source
        $student_source = new StudentSource();
        $student_source->app_date =  Input::get('app_date_date') . '-' . Input::get('app_date_month') . '-' . Input::get('app_date_year');
        $student_source->ams_date =  Input::get('ams_date_date') . '-' . Input::get('ams_date_month') . '-' . Input::get('ams_date_year');
        $student_source->source = Input::get('agent_type');
        $student_source->agent_lap = Input::get('agent_names');
        $student_source->admission_manager = Input::get('admssion_manager');
        $student_source->san = Input::get('san');
        $student_source->student_id = $student_id;
        $student_source->save();

        // Saving contact details
        $contact_details = new StudentContactInformation();
        $contact_details_1 = $contact_details->replicate();

        $contact_details->address_1 = Input::get('tt_address_1');
        $contact_details->address_2 = Input::get('tt_address_2');
        $contact_details->city = Input::get('tt_city');
        $contact_details->post_code = Input::get('tt_post_code');
        $contact_details->country = Input::get('tt_country');
        $contact_details->mobile = Input::get('tt_mobile_1').Input::get('tt_mobile_2').Input::get('tt_mobile_3').Input::get('tt_mobile');
        $contact_details->landline = Input::get('tt_landline_1').Input::get('tt_landline_2').Input::get('tt_landline_3').Input::get('tt_landline');
        $contact_details->student_contact_information_type = 1;
        $contact_details->san = Input::get('san');
        $contact_details->student_id = $student_id;
        $contact_details->save();

        $contact_details_1->address_1 = Input::get('address_1');
        $contact_details_1->address_2 = Input::get('address_2');
        $contact_details_1->city = Input::get('city');
        $contact_details_1->post_code = Input::get('post_code');
        $contact_details_1->country = Input::get('country');
        $contact_details_1->mobile = Input::get('mobile_1').Input::get('mobile_2').Input::get('mobile_3').Input::get('mobile');
        $contact_details_1->landline = Input::get('landline_1').Input::get('landline_2').Input::get('landline_3').Input::get('landline');
        $contact_details_1->student_contact_information_type = 2;
        $contact_details_1->san = Input::get('san');
        $contact_details_1->student_id = $student_id;
        $contact_details_1->save();

        $contact_details_online = new StudentContactInformationOnline();
        $contact_details_online->email = Input::get('email');
        $contact_details_online->alternative_email = Input::get('alternative_email');
        $contact_details_online->facebook = Input::get('facebook');
        $contact_details_online->linkedin = Input::get('linkedin');
        $contact_details_online->twitter = Input::get('twitter');
        $contact_details_online->other_social = Input::get('other_social');
        $contact_details_online->san = Input::get('san');
        $contact_details_online->student_id = $student_id;
        $contact_details_online->save();

        $contact_details_kin = new StudentContactInformationKinDetailes();
        $contact_details_kin->next_of_kin_title = Input::get('next_of_kin_title');
        $contact_details_kin->next_of_kin_forename = Input::get('next_of_kin_forename');
        $contact_details_kin->next_of_kin_surname = Input::get('next_of_kin_surname');
        $contact_details_kin->next_of_kin_telephone = Input::get('next_of_kin_telephone_1').Input::get('next_of_kin_telephone_2').Input::get('next_of_kin_telephone_3').Input::get('next_of_kin_telephone');
        $contact_details_kin->next_of_kin_email = Input::get('next_of_kin_email');
        $contact_details_kin->san = Input::get('san');
        $contact_details_kin->student_id = $student_id;
        $contact_details_kin->save();


        $course_enrolment = new CourseEnrolment();
            $course_enrolment->course_name = Input::get('course_name');
            $course_enrolment->course_level = Input::get('course_level');
            $course_enrolment->awarding_body = Input::get('awarding_body');

        // TO-Do
        //   $course_enrolment->intake = '2';

           $course_enrolment->intake =  Input::get('intake_month'); //intake_month = intake
            $course_enrolment->study_mode = Input::get('study_mode');

            $course_enrolment->san = Input::get('san');
            $course_enrolment->student_id = $student_id;
            $course_enrolment->save();

        $educational_qualifications = new StudentEducationalQualification();
        $educational_qualifications1 = $educational_qualifications->replicate();
        $educational_qualifications2 = $educational_qualifications->replicate();

        if(Input::get('qualification_1') == '0'){$educational_qualifications->qualification = Input::get('qualification_1_other');}else{$educational_qualifications->qualification = Input::get('qualification_1');}
        if(Input::get('qualification_2') == '0'){$educational_qualifications1->qualification = Input::get('qualification_2_other');}else{$educational_qualifications1->qualification = Input::get('qualification_2');}
        if(Input::get('qualification_3') == '0'){$educational_qualifications2->qualification = Input::get('qualification_3_other');}else{$educational_qualifications2->qualification = Input::get('qualification_3');}

        //$educational_qualifications->qualification = Input::get('qualification_1_other');
        $educational_qualifications->institution = Input::get('institution_1');
        $educational_qualifications->qualification_start_date = Input::get('qualification_start_date_1').'-'.Input::get('qualification_start_month_1').'-'.Input::get('qualification_start_year_1');
        $educational_qualifications->qualification_end_date = Input::get('qualification_end_date_1').'-'.Input::get('qualification_end_month_1').'-'.Input::get('qualification_end_year_1');
        $educational_qualifications->qualification_grade = Input::get('qualification_grade_1');
        $educational_qualifications->san = Input::get('san');
        $educational_qualifications->student_id = $student_id;
        $educational_qualifications->save();

        //$educational_qualifications1->qualification = Input::get('qualification_2');
        $educational_qualifications1->institution = Input::get('institution_2');
        $educational_qualifications1->qualification_start_date = Input::get('qualification_start_date_2').'-'.Input::get('qualification_start_month_2').'-'.Input::get('qualification_start_year_2');
        $educational_qualifications1->qualification_end_date = Input::get('qualification_end_date_2').'-'.Input::get('qualification_end_month_2').'-'.Input::get('qualification_end_year_2');
        $educational_qualifications1->qualification_grade = Input::get('qualification_grade_2');
        $educational_qualifications1->san = Input::get('san');
        $educational_qualifications1->student_id = $student_id;
        $educational_qualifications1->save();

        //$educational_qualifications2->qualification = Input::get('qualification_3');
        $educational_qualifications2->institution = Input::get('institution_3');
        $educational_qualifications2->qualification_start_date = Input::get('qualification_start_date_3').'-'.Input::get('qualification_start_month_3').'-'.Input::get('qualification_start_year_3');
        $educational_qualifications2->qualification_end_date = Input::get('qualification_end_date_3').'-'.Input::get('qualification_end_month_3').'-'.Input::get('qualification_end_year_3');
        $educational_qualifications2->qualification_grade = Input::get('qualification_grade_3');
        $educational_qualifications2->san = Input::get('san');
        $educational_qualifications2->student_id = $student_id;
        $educational_qualifications2->save();

        $english_language_level = new EnglishLangLevel();
        //To -Do
        $english_language_level->english_language_level = json_encode(Input::get('english_language_level'));
        $english_language_level->english_language_level_other = Input::get('english_language_level_other');
        $english_language_level->san = Input::get('san');
        $english_language_level->student_id = $student_id;
        $english_language_level->save();

        $work_experience_1 = new WorkExperience();
        $work_experience_2 = $work_experience_1->replicate();
        $work_experience_3 = $work_experience_1->replicate();

        $work_experience_1->occupation = Input::get('occupation_1');
        $work_experience_1->institution = Input::get('institution_1');
        $work_experience_1->occupation_start_date = Input::get('occupation_start_date_1').'-'.Input::get('occupation_start_month_1').'-'.Input::get('occupation_start_year_1');
        $work_experience_1->occupation_end_date = Input::get('occupation_end_date_1').'-'.Input::get('occupation_end_month_1').'-'.Input::get('occupation_end_year_1');
        //To-do
        //$work_experience_1->currently_working = Input::get('currently_working_1');
        $work_experience_1->currently_working = 'currently_working';
        $work_experience_1->san = Input::get('san');
        $work_experience_1->student_id = $student_id;
        $work_experience_1->save();

        $work_experience_2->occupation = Input::get('occupation_2');
        $work_experience_2->institution = Input::get('institution_2');
        $work_experience_2->occupation_start_date = Input::get('occupation_start_date_2').'-'.Input::get('occupation_start_month_2').'-'.Input::get('occupation_start_year_2');
        $work_experience_2->occupation_end_date = Input::get('occupation_end_date_2').'-'.Input::get('occupation_end_month_2').'-'.Input::get('occupation_end_year_2');
        //To-do
        //$work_experience_2->currently_working = Input::get('currently_working_1');
        $work_experience_2->currently_working = 'currently_working';
        $work_experience_2->san = Input::get('san');
        $work_experience_2->student_id = $student_id;
        $work_experience_2->save();

        $work_experience_3->occupation = Input::get('occupation_3');
        $work_experience_3->institution = Input::get('institution_3');
        $work_experience_3->occupation_start_date = Input::get('occupation_start_date_3').'-'.Input::get('occupation_start_month_3').'-'.Input::get('occupation_start_year_3');
        $work_experience_3->occupation_end_date = Input::get('occupation_end_date_3').'-'.Input::get('occupation_end_month_3').'-'.Input::get('occupation_end_year_3');
        //To-do
        //$work_experience_3->currently_working = Input::get('currently_working_1');
        $work_experience_3->currently_working = 'currently_working';
        $work_experience_3->san = Input::get('san');
        $work_experience_3->student_id = $student_id;
        $work_experience_3->save();

        $payment_info_metadata = new PaymentInfoMetadata();
        //To-Do
        $payment_info_metadata->course_fees = json_encode(Input::get('course_fees'));
        //$payment_info_metadata->course_fees = 'course_fees';
        //To-Do
        $payment_info_metadata->payment_status = json_encode(Input::get('payment_status'));
        //$payment_info_metadata->payment_status ='payment_status';

        $payment_info_metadata->total_fee = Input::get('total_fee');
        $payment_info_metadata->save();

        $payment_info_metadata_id = $payment_info_metadata->id;

        $payment_info = new PaymentInfo();

        $payment_info_installment_1 = $payment_info->replicate();
        $payment_info_installment_2 = $payment_info->replicate();
        $payment_info_installment_3 = $payment_info->replicate();


        $payment_info->payment_amount = Input::get('deposit');
        $payment_info->date = Input::get('deposit_date').'-'.Input::get('deposit_month').'-'.Input::get('deposit_year');
        $payment_info->method = Input::get('deposit');
        $payment_info->san = Input::get('san');
        $payment_info->student_id = $student_id;
        //To-Do
        $payment_info->payment_info_type = 1;
        $payment_info->save();


        $payment_info_installment_1->payment_amount = Input::get('instalment_1');
        $payment_info_installment_1->date = Input::get('instalment_1_date').'-'.Input::get('instalment_1_month').'-'.Input::get('instalment_1_year');
        $payment_info_installment_1->method = Input::get('instalment_payment_method_1');
        $payment_info_installment_1->san = Input::get('san');
        $payment_info_installment_1->student_id = $student_id;
        //To-Do
        $payment_info_installment_1->payment_info_type = 2;
        $payment_info_installment_1->save();


        $payment_info_installment_2->payment_amount = Input::get('instalment_2');
        $payment_info_installment_2->date = Input::get('instalment_2_date').'-'.Input::get('instalment_2_month').'-'.Input::get('instalment_2_year');
        $payment_info_installment_2->method = Input::get('instalment_payment_method_2');
        $payment_info_installment_2->san = Input::get('san');
        $payment_info_installment_2->student_id = $student_id;
        //To-Do
        $payment_info_installment_2->payment_info_type = 2;
        $payment_info_installment_2->save();


        $payment_info_installment_3->payment_amount = Input::get('instalment_3');
        $payment_info_installment_3->date = Input::get('instalment_3_date').'-'.Input::get('instalment_3_month').'-'.Input::get('instalment_3_year');
        $payment_info_installment_3->method = Input::get('instalment_payment_method_3');
        $payment_info_installment_3->san = Input::get('san');
        $payment_info_installment_3->student_id = $student_id;
        //To-Do
        $payment_info_installment_3->payment_info_type = 2;
        $payment_info_installment_3->save();

        $bqu_application_data = new BquApplicationData();
        $bqu_application_data->application_received_date =  Input::get('application_received_to_bqu_date').'-'.Input::get('application_received_to_bqu_month').'-'.Input::get('application_received_to_bqu_year');
        $bqu_application_data->application_input_by =Input::get('application_input_by');
        $bqu_application_data->supervisor =Input::get('supervisor');
        $bqu_application_data->verified_date =Input::get('applicant_verified_by_bqu_date').'-'.Input::get('applicant_verified_by_bqu_month').'-'.Input::get('applicant_verified_by_bqu_year');
        $bqu_application_data->status =Input::get('admission_status');
        $bqu_application_data->san = Input::get('san');
        $bqu_application_data->student_id = $student_id;
        $bqu_application_data->save();







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

}
