<?php

class StudentsController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /students
     *
     * @return Response
     */
    public function index()
    {/*
       return View::make('students.index')
            ->with('students',Student::all());*/

        //return DB::table('students')->select(array(DB::raw('max(id) as id,title,initials_1,initials_2,initials_3,forename_1,forename_2,forename_3,surname,ls_student_number,san')))->get();
        if (Sentry::getUser()->hasAccess('students.index')){
            return View::make('students.index')
                ->with('students', DB::table('students')->select(DB::raw('max(id) as id,title,initials_1,initials_2,initials_3,forename_1,forename_2,forename_3,surname,ls_student_number ,san'))
                    ->groupBy('san')
                    ->get());
    }else{
            return View::make('static.no_access');
        }

        /*return View::make('students.index')
            ->with('students',DB::table('students')->select(DB::raw('max(id) as id,max(title) as title,max(initials_1) as initials_1,max(initials_2) as initials_2,max(initials_3) as initials_3,max(forename_1) as forename_1,max(forename_2) as forename_2,max(forename_3) as forename_3,max(surname) as surname,max(ls_student_number) as ls_student_number,san'))
                ->groupBy('san')
                ->get());*/

    }

    /**
     * Show the form for creating a new resource.
     * GET /students/create
     *
     * @return Response
     */
    public function create()
    {
        //
        try
        {
            $bqu_group = Sentry::findGroupByName('BQu');
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
        {
            echo 'Group was not found.';
        }

        $supervisors = DB::table('users')
            ->join('users_groups', 'users.id', '=', 'users_groups.user_id')
            ->where('users_groups.group_id', '=', $bqu_group->id)
            ->select('users.id', 'users.first_name', 'users.last_name')
            ->get();


        return View::make('students.create')
            ->with('information_sources',ApplicationSource::lists('name','id'))
            //->with('admission_managers',ApplicationAdmissionManager::lists('name','id'))
            //To-Do
            ->with('admission_managers',ApplicationAdmissionManager::lists('name','id'))

            //->with('agents_laps',ApplicationAdmissionManager::lists('name','id'))

            ->with('agents_laps',array_merge(ApplicationAgent::lists('name','id'), ApplicationLap::lists('name','id')))
            ->with('nationalities',StaticNationality::lists('name','id'))
            ->with('countries',StaticCountry::lists('name','id'))
            ->with('course_names',ApplicationCourse::lists('name','id'))
            ->with('awarding_bodies',ApplicationAwardingBody::lists('name','id'))

            ->with('education_qualifications',ApplicationEducationalQualification::lists('name','id'))
            ->with('method_of_payment',ApplicationPaymentInfoMethodsOfPayment::lists('name','id'))
            ->with('application_status',ApplicationStatus::lists('name','id'))
            ->with('intake_year',StaticYear::lists('name','id'))
            ->with('intake_month',StaticMonth::lists('name','id'))
            ->with('supervisors',$supervisors);
      //  ->with('intake_year',DB::table('application_intakes')->join('intake_year', 'intake_year.id', '=', 'application_intakes.year')->select('intake_year.id', 'intake_year.name')->groupBy('intake_year.name')->lists( 'intake_year.name','years.id'));
        //To-Do
        //->with('intake_month',Month::lists('name','id'));
       //  ->with('intake_month',DB::table('application_intakes')->join('months', 'months.id', '=', 'application_intakes.month')->select('application_intakes.id', 'months.name')->groupBy('months.name')->lists( 'months.name','application_intakes.id'));
        //return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     * POST /students
     *
     * @return Response
     */
    public function store()
    {
        //return Input::all();
        //
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
        $student->created_by = Sentry::getUser()->id;
        $student->record_status = '1';
        $student->san = Input::get('san');
        $student->ls_student_number = Input::get('ls_student_number');


        $student->save();

        $student_id = $student->id;



        //Student Source
        $student_source = new StudentSource();
        $student_source->app_date =  Input::get('app_date_date') . '-' . Input::get('app_date_month') . '-' . Input::get('app_date_year');
        $student_source->ams_date =  Input::get('ams_date_date') . '-' . Input::get('ams_date_month') . '-' . Input::get('ams_date_year');
        $student_source->source = Input::get('information_source');

        $student_source->agent_lap = Input::get('agents_laps');
        $student_source->agents_laps_other = Input::get('agents_laps_other');

        $student_source->admission_manager = Input::get('admission_manager');
        $student_source->admission_managers_other = Input::get('admission_managers_other');
        $student_source->san = Input::get('san');
        $student_source->student_id = $student_id;
        $student_source->record_status = '1';
        $student_source->created_by = Sentry::getUser()->id;
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
        $contact_details->record_status = '1';
        $contact_details->created_by = Sentry::getUser()->id;
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
        $contact_details_1->record_status = '1';
        $contact_details_1->created_by = Sentry::getUser()->id;
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
        $contact_details_online->record_status = '1';
        $contact_details_online->created_by = Sentry::getUser()->id;
        $contact_details_online->save();

        $contact_details_kin = new StudentContactInformationKinDetail();
        $contact_details_kin->next_of_kin_title = Input::get('next_of_kin_title');
        $contact_details_kin->next_of_kin_forename = Input::get('next_of_kin_forename');
        $contact_details_kin->next_of_kin_surname = Input::get('next_of_kin_surname');
        $contact_details_kin->next_of_kin_telephone = Input::get('next_of_kin_telephone_1').Input::get('next_of_kin_telephone_2').Input::get('next_of_kin_telephone_3').Input::get('next_of_kin_telephone');
        $contact_details_kin->next_of_kin_email = Input::get('next_of_kin_email');
        $contact_details_kin->san = Input::get('san');
        $contact_details_kin->student_id = $student_id;
        $contact_details_kin->record_status = '1';
        $contact_details_kin->created_by = Sentry::getUser()->id;
        $contact_details_kin->save();


        $course_enrolment = new StudentCourseEnrolment();
        $course_enrolment->course_name = Input::get('course_name');
        $course_enrolment->course_level = Input::get('course_level');
        $course_enrolment->awarding_body = Input::get('awarding_body');

        // TO-Do
        //   $course_enrolment->intake = '2';

        $course_enrolment->intake =  Input::get('intake_month'); //intake_month = intake
        $course_enrolment->study_mode = Input::get('study_mode');

        $course_enrolment->san = Input::get('san');
        $course_enrolment->student_id = $student_id;
        $course_enrolment->record_status = '1';
        $course_enrolment->created_by = Sentry::getUser()->id;
        $course_enrolment->save();

        $educational_qualifications = new StudentEducationalQualification();
        $educational_qualifications1 = $educational_qualifications->replicate();
        $educational_qualifications2 = $educational_qualifications->replicate();

        $educational_qualifications->qualification_other = Input::get('qualification_1_other');
        $educational_qualifications->qualification = Input::get('qualification_1');
        $educational_qualifications1->qualification_other = Input::get('qualification_2_other');
        $educational_qualifications1->qualification = Input::get('qualification_2');
        $educational_qualifications2->qualification_other = Input::get('qualification_3_other');
        $educational_qualifications2->qualification = Input::get('qualification_3');

        //$educational_qualifications->qualification = Input::get('qualification_1_other');
        $educational_qualifications->institution = Input::get('institution_1');
        $educational_qualifications->qualification_start_date = Input::get('qualification_start_date_1').'-'.Input::get('qualification_start_month_1').'-'.Input::get('qualification_start_year_1');
        $educational_qualifications->qualification_end_date = Input::get('qualification_end_date_1').'-'.Input::get('qualification_end_month_1').'-'.Input::get('qualification_end_year_1');
        $educational_qualifications->qualification_grade = Input::get('qualification_grade_1');
        $educational_qualifications->san = Input::get('san');
        $educational_qualifications->student_id = $student_id;
        $educational_qualifications->record_status = '1';
        $educational_qualifications->created_by = Sentry::getUser()->id;
        $educational_qualifications->save();

        //$educational_qualifications1->qualification = Input::get('qualification_2');
        $educational_qualifications1->institution = Input::get('institution_2');
        $educational_qualifications1->qualification_start_date = Input::get('qualification_start_date_2').'-'.Input::get('qualification_start_month_2').'-'.Input::get('qualification_start_year_2');
        $educational_qualifications1->qualification_end_date = Input::get('qualification_end_date_2').'-'.Input::get('qualification_end_month_2').'-'.Input::get('qualification_end_year_2');
        $educational_qualifications1->qualification_grade = Input::get('qualification_grade_2');
        $educational_qualifications1->san = Input::get('san');
        $educational_qualifications1->student_id = $student_id;
        $educational_qualifications1->record_status = '1';
        $educational_qualifications1->created_by = Sentry::getUser()->id;
        $educational_qualifications1->save();

        //$educational_qualifications2->qualification = Input::get('qualification_3');
        $educational_qualifications2->institution = Input::get('institution_3');
        $educational_qualifications2->qualification_start_date = Input::get('qualification_start_date_3').'-'.Input::get('qualification_start_month_3').'-'.Input::get('qualification_start_year_3');
        $educational_qualifications2->qualification_end_date = Input::get('qualification_end_date_3').'-'.Input::get('qualification_end_month_3').'-'.Input::get('qualification_end_year_3');
        $educational_qualifications2->qualification_grade = Input::get('qualification_grade_3');
        $educational_qualifications2->san = Input::get('san');
        $educational_qualifications2->student_id = $student_id;
        $educational_qualifications2->record_status = '1';
        $educational_qualifications2->created_by = Sentry::getUser()->id;
        $educational_qualifications2->save();

        $english_language_level = new StudentEnglishLangLevels();
        //To -Do
        $english_language_level->english_language_level = json_encode(Input::get('english_language_level'));
        $english_language_level->english_language_level_other = Input::get('english_language_level_other');
        $english_language_level->san = Input::get('san');
        $english_language_level->student_id = $student_id;
        $english_language_level->record_status = '1';
        $english_language_level->created_by = Sentry::getUser()->id;
        $english_language_level->save();

        $work_experience_1 = new StudentWorkExperience();
        $work_experience_2 = $work_experience_1->replicate();
        $work_experience_3 = $work_experience_1->replicate();

        $work_experience_1->occupation = Input::get('occupation_1');
        //$work_experience_1->institution = Input::get('institution_1');
        $work_experience_1->company_name = Input::get('company_name_1');
        $work_experience_1->main_duties = Input::get('main_duties_and_responsibilities_1');
        $work_experience_1->occupation_start_date = Input::get('occupation_start_date_1').'-'.Input::get('occupation_start_month_1').'-'.Input::get('occupation_start_year_1');
        $work_experience_1->occupation_end_date = Input::get('occupation_end_date_1').'-'.Input::get('occupation_end_month_1').'-'.Input::get('occupation_end_year_1');
        //To-do
        $work_experience_1->currently_working = Input::get('currently_working_1', false);
        //$work_experience_1->currently_working = 'currently_working';
        $work_experience_1->san = Input::get('san');
        $work_experience_1->student_id = $student_id;
        $work_experience_1->record_status = '1';
        $work_experience_1->created_by = Sentry::getUser()->id;
        $work_experience_1->save();

        $work_experience_2->occupation = Input::get('occupation_2');
        //$work_experience_2->institution = Input::get('institution_2');

        $work_experience_2->company_name = Input::get('company_name_2');
        $work_experience_2->main_duties = Input::get('main_duties_and_responsibilities_2');
        $work_experience_2->occupation_start_date = Input::get('occupation_start_date_2').'-'.Input::get('occupation_start_month_2').'-'.Input::get('occupation_start_year_2');
        $work_experience_2->occupation_end_date = Input::get('occupation_end_date_2').'-'.Input::get('occupation_end_month_2').'-'.Input::get('occupation_end_year_2');
        //To-do
        $work_experience_2->currently_working = Input::get('currently_working_2', false);
        //$work_experience_2->currently_working = 'currently_working';
        $work_experience_2->san = Input::get('san');
        $work_experience_2->student_id = $student_id;
        $work_experience_2->record_status = '1';
        $work_experience_2->created_by = Sentry::getUser()->id;
        $work_experience_2->save();

        $work_experience_3->occupation = Input::get('occupation_3');
        //$work_experience_3->institution = Input::get('institution_3');
        $work_experience_3->company_name = Input::get('company_name_3');
        $work_experience_3->main_duties = Input::get('main_duties_and_responsibilities_3');
        $work_experience_3->occupation_start_date = Input::get('occupation_start_date_3').'-'.Input::get('occupation_start_month_3').'-'.Input::get('occupation_start_year_3');
        $work_experience_3->occupation_end_date = Input::get('occupation_end_date_3').'-'.Input::get('occupation_end_month_3').'-'.Input::get('occupation_end_year_3');
        //To-do
        $work_experience_3->currently_working = Input::get('currently_working_3', false);
        //$work_experience_3->currently_working = 'currently_working';
        $work_experience_3->san = Input::get('san');
        $work_experience_3->student_id = $student_id;
        $work_experience_3->record_status = '1';
        $work_experience_3->created_by = Sentry::getUser()->id;
        $work_experience_3->save();

        $payment_info_metadata = new StudentPaymentInfoMetadata();
        //To-Do
        $payment_info_metadata->course_fees = json_encode(Input::get('course_fees'));
        //$payment_info_metadata->course_fees = 'course_fees';
        //To-Do
        $payment_info_metadata->payment_status = json_encode(Input::get('payment_status'));
        //$payment_info_metadata->payment_status ='payment_status';

        $payment_info_metadata->total_fee = Input::get('total_fee');
        $payment_info_metadata->late_admin_fee = Input::get('late_admin_fee');
        $payment_info_metadata->late_fee = Input::get('late_fee');
        $payment_info_metadata->san = Input::get('san');
        $payment_info_metadata->student_id = $student_id;
        $payment_info_metadata->record_status = '1';
        $payment_info_metadata->created_by = Sentry::getUser()->id;
        $payment_info_metadata->save();

        $payment_info_metadata_id = $payment_info_metadata->id;

        $payment_info = new StudentPaymentInfo();

        $payment_info_installment_1 = $payment_info->replicate();
        $payment_info_installment_2 = $payment_info->replicate();
        $payment_info_installment_3 = $payment_info->replicate();


        $payment_info->payment_amount = Input::get('deposit');
        $payment_info->date = Input::get('deposit_date').'-'.Input::get('deposit_month').'-'.Input::get('deposit_year');
        $payment_info->method = Input::get('deposit_payment_method_1');
        $payment_info->san = Input::get('san');
        $payment_info->student_id = $student_id;
        //To-Do
        $payment_info->payment_info_type = 1;
        $payment_info->record_status = '1';
        $payment_info->created_by = Sentry::getUser()->id;
        $payment_info->save();


        $payment_info_installment_1->payment_amount = Input::get('instalment_1');
        $payment_info_installment_1->date = Input::get('instalment_1_date').'-'.Input::get('instalment_1_month').'-'.Input::get('instalment_1_year');
        $payment_info_installment_1->method = Input::get('instalment_payment_method_1');
        $payment_info_installment_1->san = Input::get('san');
        $payment_info_installment_1->student_id = $student_id;
        //To-Do
        $payment_info_installment_1->payment_info_type = 2;
        $payment_info_installment_1->record_status = '1';
        $payment_info_installment_1->created_by = Sentry::getUser()->id;
        $payment_info_installment_1->save();


        $payment_info_installment_2->payment_amount = Input::get('instalment_2');
        $payment_info_installment_2->date = Input::get('instalment_2_date').'-'.Input::get('instalment_2_month').'-'.Input::get('instalment_2_year');
        $payment_info_installment_2->method = Input::get('instalment_payment_method_2');
        $payment_info_installment_2->san = Input::get('san');
        $payment_info_installment_2->student_id = $student_id;
        //To-Do
        $payment_info_installment_2->payment_info_type = 2;
        $payment_info_installment_2->record_status = '1';
        $payment_info_installment_2->created_by = Sentry::getUser()->id;
        $payment_info_installment_2->save();


        $payment_info_installment_3->payment_amount = Input::get('instalment_3');
        $payment_info_installment_3->date = Input::get('instalment_3_date').'-'.Input::get('instalment_3_month').'-'.Input::get('instalment_3_year');
        $payment_info_installment_3->method = Input::get('instalment_payment_method_3');
        $payment_info_installment_3->san = Input::get('san');
        $payment_info_installment_3->student_id = $student_id;
        //To-Do
        $payment_info_installment_3->payment_info_type = 2;
        $payment_info_installment_3->record_status = '1';
        $payment_info_installment_3->created_by = Sentry::getUser()->id;
        $payment_info_installment_3->save();

        $bqu_application_data = new StudentBquData();
        $bqu_application_data->application_received_date =  Input::get('application_received_to_bqu_date').'-'.Input::get('application_received_to_bqu_month').'-'.Input::get('application_received_to_bqu_year');
        $bqu_application_data->application_input_by =Input::get('application_input_by');
        $bqu_application_data->supervisor =Input::get('supervisor');
        $bqu_application_data->verified_date =Input::get('applicant_verified_by_bqu_date').'-'.Input::get('applicant_verified_by_bqu_month').'-'.Input::get('applicant_verified_by_bqu_year');
        $bqu_application_data->status =Input::get('admission_status');
        $bqu_application_data->notes = Input::get('notes');
        $bqu_application_data->san = Input::get('san');
        $bqu_application_data->student_id = $student_id;
        $bqu_application_data->record_status = Input::get('admission_status');
        $bqu_application_data->created_by = Sentry::getUser()->id;
        $bqu_application_data->save();

        return View::make('students.index')
            ->with('students',DB::table('students')->select(DB::raw('max(id) as id,title,initials_1,initials_2,initials_3,forename_1,forename_2,forename_3,surname,ls_student_number ,san'))
                ->groupBy('san')
                ->get());

return View::make('students.index')->with('students',Student::all());
    }

    /**
     * Display the specified resource.
     * GET /students/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($san)
    {

        return View::make('students.more')
            ->with('information_sources',ApplicationSource::lists('name','id'))
            ->with('admission_managers',ApplicationAdmissionManager::lists('name','id'))
            //To-Do
            // ->with('admission_managers',ApplicationAdmissionManager::where('source_id','=',1)->lists('name','id'))

            ->with('agents_laps',ApplicationAdmissionManager::lists('name','id'))
            ->with('nationalities',StaticNationality::lists('name','id'))
            ->with('countries',StaticCountry::lists('name','id'))
            ->with('course_names',ApplicationCourse::lists('name','id'))
            ->with('awarding_bodies',ApplicationAwardingBody::lists('name','id'))

            ->with('education_qualifications',ApplicationEducationalQualification::lists('name','id'))
            ->with('method_of_payment',ApplicationPaymentInfoMethodsOfPayment::lists('name','id'))
            ->with('application_status',ApplicationStatus::lists('name','id'))
            ->with('intake_year',StaticYear::lists('name','id'))
            ->with('intake_month',StaticMonth::lists('name','id'))
            // Getting Saved DATA
            ->with('student',Student::where('san','=',$san)->orderBy('id','desc')->first())
            ->with('studentSource',StudentSource::where('san','=',$san)->orderBy('id','desc')->first())
            ->with('ttStudentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',1)
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('studentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',2)
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('studentContactInformationOnline',DB::table('student_contact_information_onlines')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('student_contact_information_kin_detailes',DB::table('student_contact_information_kin_detailes')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('student_course_enrolments',DB::table('student_course_enrolments')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('student_educational_qualifications',StudentEducationalQualification::lastThreeRecordsBySAN($san)->reverse())
            ->with('student_english_lang_levels',DB::table('student_english_lang_levels')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('student_work_experiences',StudentWorkExperience::lastThreeRecordsBySAN($san)->reverse())
            ->with('student_payment_info_metadata',DB::table('student_payment_info_metadatas')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('studentPaymentInfos',StudentPaymentInfo::lastFourRecordsBySAN($san)->reverse())
            ->with('student_bqu_data',DB::table('student_bqu_data')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ;

    }
    public function reject($san)
    {

        return View::make('students.reject')
            ->with('information_sources',ApplicationSource::lists('name','id'))
            ->with('admission_managers',ApplicationAdmissionManager::lists('name','id'))
            //To-Do
            // ->with('admission_managers',ApplicationAdmissionManager::where('source_id','=',1)->lists('name','id'))

            ->with('agents_laps',ApplicationAdmissionManager::lists('name','id'))
            ->with('nationalities',StaticNationality::lists('name','id'))
            ->with('countries',StaticCountry::lists('name','id'))
            ->with('course_names',ApplicationCourse::lists('name','id'))
            ->with('awarding_bodies',ApplicationAwardingBody::lists('name','id'))

            ->with('education_qualifications',ApplicationEducationalQualification::lists('name','id'))
            ->with('method_of_payment',ApplicationPaymentInfoMethodsOfPayment::lists('name','id'))
            ->with('application_status',ApplicationStatus::lists('name','id'))
            ->with('intake_year',StaticYear::lists('name','id'))
            ->with('intake_month',StaticMonth::lists('name','id'))
            // Getting Saved DATA
            ->with('student',Student::where('san','=',$san)->orderBy('id','desc')->first())
            ->with('studentSource',StudentSource::where('san','=',$san)->orderBy('id','desc')->first())
            ->with('ttStudentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',1)
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('studentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',2)
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('studentContactInformationOnline',DB::table('student_contact_information_onlines')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('student_contact_information_kin_detailes',DB::table('student_contact_information_kin_detailes')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('student_course_enrolments',DB::table('student_course_enrolments')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('student_educational_qualifications',StudentEducationalQualification::lastThreeRecordsBySAN($san)->reverse())
            ->with('student_english_lang_levels',DB::table('student_english_lang_levels')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('student_work_experiences',StudentWorkExperience::lastThreeRecordsBySAN($san)->reverse())
            ->with('student_payment_info_metadata',DB::table('student_payment_info_metadatas')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('studentPaymentInfos',StudentPaymentInfo::lastFourRecordsBySAN($san)->reverse())
            ->with('student_bqu_data',DB::table('student_bqu_data')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ;

    }


    /**
     * Show the form for editing the specified resource.
     * GET /students/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($san)
    {
        if (Sentry::getUser()->hasAccess('students.validate')){
        try
        {
            $bqu_group = Sentry::findGroupByName('BQu');
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
        {
            echo 'Group was not found.';
        }

        $supervisors = DB::table('users')
            ->join('users_groups', 'users.id', '=', 'users_groups.user_id')
           /* ->where('users_groups.group_id', '=', $bqu_group->id)*/
            ->select('users.id', 'users.first_name', 'users.last_name')
            ->get();


        return View::make('students.edit')
            ->with('information_sources',ApplicationSource::lists('name','id'))
            //->with('admission_managers',ApplicationAdmissionManager::lists('name','id'))
            //To-Do
            ->with('admission_managers',ApplicationAdmissionManager::lists('name','id'))

            //->with('agents_laps',ApplicationAdmissionManager::lists('name','id'))

            ->with('agents_laps',array_merge(ApplicationAgent::lists('name','id'), ApplicationLap::lists('name','id')))
            ->with('nationalities',StaticNationality::lists('name','id'))
            ->with('countries',StaticCountry::lists('name','id'))
            ->with('course_names',ApplicationCourse::lists('name','id'))
            ->with('awarding_bodies',ApplicationAwardingBody::lists('name','id'))

            ->with('education_qualifications',ApplicationEducationalQualification::lists('name','id'))
            ->with('method_of_payment',ApplicationPaymentInfoMethodsOfPayment::lists('name','id'))
            ->with('application_status',ApplicationStatus::lists('name','id'))
            ->with('intake_year',StaticYear::lists('name','id'))
            ->with('intake_month',StaticMonth::lists('name','id'))
            ->with('supervisors',$supervisors)

            // Data

            // Getting Saved DATA
            ->with('data_student',Student::where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')->first())
            ->with('data_studentSource',StudentSource::where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')->first())
            ->with('data_ttStudentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',1)
                ->where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_studentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',2)
                ->where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_studentContactInformationOnline',DB::table('student_contact_information_onlines')
                ->where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_student_contact_information_kin_detailes',DB::table('student_contact_information_kin_detailes')
                ->where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_student_course_enrolments',DB::table('student_course_enrolments')
                ->where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_student_educational_qualifications',StudentEducationalQualification::lastThreeRecordsBySAN($san)->reverse())
            ->with('data_student_english_lang_levels',DB::table('student_english_lang_levels')
                ->where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_student_work_experiences',StudentWorkExperience::lastThreeRecordsBySAN($san)->reverse())
            ->with('data_student_payment_info_metadata',DB::table('student_payment_info_metadatas')
                ->where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_studentPaymentInfos',StudentPaymentInfo::lastFourRecordsBySAN($san)->reverse())
            ->with('data_student_bqu_data',DB::table('student_bqu_data')
                ->where('san','=',$san)->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ;


        //return Student::where('id','=',$id)->first();
        //
		//$user = new Student();
		// accessor
		//var_dump($user->lastRecordBySAN('a123'));
/*
        return View::make('students.edit')
            ->with('information_sources',ApplicationSource::lists('name','id'))
            ->with('admission_managers',ApplicationAdmissionManager::lists('name','id'))
            //To-Do
            // ->with('admission_managers',ApplicationAdmissionManager::where('source_id','=',1)->lists('name','id'))

            ->with('agents_laps',ApplicationAdmissionManager::lists('name','id'))
            ->with('nationalities',StaticNationality::lists('name','id'))
            ->with('countries',StaticCountry::lists('name','id'))
            ->with('course_names',ApplicationCourse::lists('name','id'))
            ->with('awarding_bodies',ApplicationAwardingBody::lists('name','id'))

            ->with('education_qualifications',ApplicationEducationalQualification::lists('name','id'))
            ->with('method_of_payment',ApplicationPaymentInfoMethodsOfPayment::lists('name','id'))
            ->with('application_status',ApplicationStatus::lists('name','id'))
            ->with('intake_year',StaticYear::lists('name','id'))
            ->with('intake_month',StaticMonth::lists('name','id'))
            // Getting Saved DATA
            ->with('student',Student::where('san','=',$san)->first())
            ->with('studentSource',StudentSource::where('san','=',$san)->first())
            ->with('ttStudentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',1)
                ->where('san','=',$san)
                ->first())
            ->with('studentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',2)
                ->where('san','=',$san)
                ->first())
            ->with('studentContactInformationOnline',DB::table('student_contact_information_onlines')
                ->where('san','=',$san)
                ->first())
            ;*/
        }else{
            return View::make('static.no_access');
        }
    }

    public function verify(){
        return View::make('students.verify')
            ->with('students',DB::table('students')->select(DB::raw('max(id) as id,title,initials_1,initials_2,initials_3,forename_1,forename_2,forename_3,surname,ls_student_number ,san'))
                ->groupBy('san')
                ->get());
    }
    public function validate(){
        return View::make('students.validate')
            ->with('students',DB::table('students')->select(DB::raw('max(id) as id,title,initials_1,initials_2,initials_3,forename_1,forename_2,forename_3,surname,ls_student_number ,san'))
                ->groupBy('san')
                ->get());
    }


    /**
     * Update the specified resource in storage.
     * PUT /students/{id}
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
     * DELETE /students/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($san)
    {
        //
        $student = Student::where('san','=',$san)->orderBy('id','desc')->first()->replicate();
        $student->record_status = 5;
        $student->save();

        $student_bqu_data = StudentBquData::where('san','=',$san)->orderBy('id','desc')->first()->replicate();
        $student_bqu_data->notes = Input::get('notes');
        $student_bqu_data->record_status = 5;
        $student_bqu_data->status = 5;
        $student_bqu_data->save();

        return View::make('students.index')
            ->with('students', DB::table('students')->select(DB::raw('max(id) as id,title,initials_1,initials_2,initials_3,forename_1,forename_2,forename_3,surname,ls_student_number ,san'))
                ->groupBy('san')
                ->get());
    }

    public function export()
    {
	
        return Excel::create('Mastersheet BQu version', function($excel) {

			$excel->sheet('Mastersheet BQu version', function($sheet) {

				$sheet->loadView('export.master_sheet');

			});
            $excel->setcreator('BQu');
            $excel->setlastModifiedBy('BQu');
            $excel->setcompany('BQuServices(PVT)LTD');
            $excel->setmanager('Rajitha');

		})->download('xls');
    }
    public function checkSanAvailability()
    {
	
       $clanCount = Student::where('san', '=', Input::get('option'))->count();
        if ($clanCount == 0) {
            return 'Available';
        } else {
            return 'Not Available';
        }
    }


    public function amendment($san)
    {
        //return Student::where('id','=',$id)->first();
        //
        //$user = new Student();
        // accessor
        //var_dump($user->lastRecordBySAN('a123'));
        if (Sentry::getUser()->hasAccess('students.amendment')){
        try
        {
            $bqu_group = Sentry::findGroupByName('BQu');
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
        {
            echo 'Group was not found.';
        }


        $supervisors = DB::table('users')
            ->join('users_groups', 'users.id', '=', 'users_groups.user_id')
            ->where('users_groups.group_id', '=', $bqu_group->id)
            ->select('users.id', 'users.first_name', 'users.last_name')
            ->get();

        return View::make('students.amendment')
            ->with('information_sources',ApplicationSource::lists('name','id'))
            ->with('admission_managers',ApplicationAdmissionManager::lists('name','id'))
            //To-Do
            // ->with('admission_managers',ApplicationAdmissionManager::where('source_id','=',1)->lists('name','id'))

            ->with('agents_laps',ApplicationAdmissionManager::lists('name','id'))
            ->with('nationalities',StaticNationality::lists('name','id'))
            ->with('countries',StaticCountry::lists('name','id'))
            ->with('course_names',ApplicationCourse::lists('name','id'))
            ->with('awarding_bodies',ApplicationAwardingBody::lists('name','id'))

            ->with('education_qualifications',ApplicationEducationalQualification::lists('name','id'))
            ->with('method_of_payment',ApplicationPaymentInfoMethodsOfPayment::lists('name','id'))
            ->with('application_status',ApplicationStatus::lists('name','id'))
            ->with('intake_year',StaticYear::lists('name','id'))
            ->with('intake_month',StaticMonth::lists('name','id'))
            // Getting Saved DATA
            ->with('data_student',Student::where('san','=',$san)->orderBy('id','desc')->first())
            ->with('data_studentSource',StudentSource::where('san','=',$san)->orderBy('id','desc')->first())
            ->with('data_ttStudentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',1)
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_studentContactInformation',DB::table('student_contact_informations')
                ->where('student_contact_information_type','=',2)
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_studentContactInformationOnline',DB::table('student_contact_information_onlines')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())

            ->with('data_student_contact_information_kin_detailes',DB::table('student_contact_information_kin_detailes')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_student_course_enrolments',DB::table('student_course_enrolments')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_student_educational_qualifications',StudentEducationalQualification::lastThreeRecordsBySAN($san)->reverse())
            ->with('data_student_english_lang_levels',DB::table('student_english_lang_levels')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_student_work_experiences',StudentWorkExperience::lastThreeRecordsBySAN($san)->reverse())
            ->with('data_student_payment_info_metadata',DB::table('student_payment_info_metadatas')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('data_studentPaymentInfos',StudentPaymentInfo::lastFourRecordsBySAN($san)->reverse())
            ->with('data_student_bqu_data',DB::table('student_bqu_data')
                ->where('san','=',$san)->orderBy('id','desc')
                ->first())
            ->with('supervisors',$supervisors);

            ;}else{
            return View::make('static.no_access');
        }
    }

    public function information_source_dropdown(){
        $source = Input::get('option');
        if(intval($source) == 1)
            return ApplicationAgent::lists('name','id');
        else{
            return ApplicationLap::lists('name','id');
        }
    }

}