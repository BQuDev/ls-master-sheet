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
        return View::make('admissions.index');
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
        {Admission::create(Input::all());

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
	}

}