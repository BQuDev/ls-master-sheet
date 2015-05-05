<?php namespace App\Http\Controllers;

use App\ContactInformation;
use App\CourseDetails;
use App\CourseEnrolment;
use App\EducationalQualifications;
use App\EnglishLangLevel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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


            $course_enrolment = new CourseEnrolment();
            $course_enrolment->course_name = Input::get('course_name');
            $course_enrolment->awarding_body = Input::get('awarding_body');
            $course_enrolment->intake = Input::get('intake');
            $course_enrolment->study_mode = Input::get('study_mode');

            $course_enrolment->san = Input::get('san');
            $course_enrolment->student_id = $student_id;
            $course_enrolment->save();

        $educational_qualifications = new EducationalQualifications();
        $educational_qualifications1 = $educational_qualifications->replicate();
        $educational_qualifications2 = $educational_qualifications->replicate();

        $educational_qualifications->qualification = Input::get('qualification_1');
        $educational_qualifications->institution = Input::get('institution_1');
        $educational_qualifications->qualification_start_date = Input::get('qualification_start_date_1').'-'.Input::get('qualification_start_month_1').'-'.Input::get('qualification_start_year_1');
        $educational_qualifications->qualification_end_date = Input::get('qualification_end_date_1').'-'.Input::get('qualification_end_month_1').'-'.Input::get('qualification_end_year_1');
        $educational_qualifications->qualification_grade = Input::get('qualification_grade_1');
        $educational_qualifications->san = Input::get('san');
        $educational_qualifications->student_id = $student_id;
        $educational_qualifications->save();

        $educational_qualifications1->qualification = Input::get('qualification_2');
        $educational_qualifications1->institution = Input::get('institution_2');
        $educational_qualifications1->qualification_start_date = Input::get('qualification_start_date_2').'-'.Input::get('qualification_start_month_2').'-'.Input::get('qualification_start_year_2');
        $educational_qualifications1->qualification_end_date = Input::get('qualification_end_date_2').'-'.Input::get('qualification_end_month_2').'-'.Input::get('qualification_end_year_2');
        $educational_qualifications1->qualification_grade = Input::get('qualification_grade_2');
        $educational_qualifications1->san = Input::get('san');
        $educational_qualifications1->student_id = $student_id;
        $educational_qualifications1->save();

        $educational_qualifications2->qualification = Input::get('qualification_3');
        $educational_qualifications2->institution = Input::get('institution_3');
        $educational_qualifications2->qualification_start_date = Input::get('qualification_start_date_3').'-'.Input::get('qualification_start_month_3').'-'.Input::get('qualification_start_year_3');
        $educational_qualifications2->qualification_end_date = Input::get('qualification_end_date_3').'-'.Input::get('qualification_end_month_3').'-'.Input::get('qualification_end_year_3');
        $educational_qualifications2->qualification_grade = Input::get('qualification_grade_3');
        $educational_qualifications2->san = Input::get('san');
        $educational_qualifications2->student_id = $student_id;
        $educational_qualifications2->save();

        $english_language_level = new EnglishLangLevel();





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
