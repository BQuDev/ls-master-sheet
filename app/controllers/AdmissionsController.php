<?php

class AdmissionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admissions
	 *
	 * @return Response
	 */
	public function index()
	{
		//

        $queries = DB::table('admissions')
            ->select(DB::raw('max(id) as id'))
            ->orderBy('id', 'asc')
            ->groupBy('student_id')
            ->get();
        //return $queries;
        $results = [];
        foreach($queries as $query) {
            $results[] = Admission::find($query->id);
        }

        //return $results;
        //$query = DB::table('admissions')->groupBy('student_id')->get(['*', DB::raw('MAX(id) as asd')]);return $query;
        return View::make('admissions.index')->with('admissions',$results);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admissions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('admissions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admissions
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        // create the data for our duck
  /*      $admission = new Admission();
        $admission->title = Input::get('title');
        $admission->first_name = Input::get('first_name');
        $admission->name_2 = Input::get('name_2');
        $admission->comments = Input::get('comments');


        // save our duck
        $admission->save();
*/
       // return json_encode(Input::all());
        $rules = array(
            //'password' => 'pass|required',
            // more stuff here
        );

        $v = Validator::make(Input::all(), $rules);

        if ($v->passes())
        {
            Admission::create(Input::all());
            return Redirect::to("admissions");

        }

    }

	/**
	 * Display the specified resource.
	 * GET /admissions/{id}
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
	 * GET /admissions/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
        $admission = Admission::find($id);
        return View::make('admissions.edit')->with('admission',$admission);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admissions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
        Admission::create(Input::all());
        return Redirect::to("admissions");
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admissions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
        $admission = Admission::find($id);
        $admission->delete();
        return Redirect::to("admissions");
	}
/*
    public function dataTablesAdmissions(){
        $admissions = DB::table('admissions')
            ->select(array('admissions.id','admissions.name','admissions.email','admissions.mobile','admissions.origin_country'));
        return Datatables::of($admissions)->add_column('action', '<span class="btn btn-danger"  onclick="deleteUser({{ $id }});">Delete</span>&nbsp;<a href="{{ URL::to(\'admissions\') }}/{{ $id }}" class="btn btn-default">More<a>&nbsp; <a class="btn btn-small btn-info" href="{{ URL::to(\'admissions\') }}/{{ $id }}/edit">Edit</a> ', 11)->make();
    }*/

}