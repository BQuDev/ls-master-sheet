<?php

class StudentsController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /students
     *
     * @return Response
     */
    public function index()
    {
        return View::make('students.index');
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
        return View::make('students.create')
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
            ->with('intake_month',StaticMonth::lists('name','id'));
        //->with('intake_year',DB::table('application_intakes')->join('years', 'years.id', '=', 'application_intakes.year')->select('years.id', 'years.name')->groupBy('years.name')->lists( 'years.name','years.id'))
        //To-Do
        //->with('intake_month',Month::lists('name','id'));
        // ->with('intake_month',DB::table('application_intakes')->join('months', 'months.id', '=', 'application_intakes.month')->select('application_intakes.id', 'months.name')->groupBy('months.name')->lists( 'months.name','application_intakes.id'));
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
        //
    }

    /**
     * Display the specified resource.
     * GET /students/{id}
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
     * GET /students/{id}/edit
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
    public function destroy($id)
    {
        //
    }

}