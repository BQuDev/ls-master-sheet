<?php

class ModulesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /modules
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /modules/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /modules
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /modules/{id}
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
	 * GET /modules/{id}/edit
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
	 * PUT /modules/{id}
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
	 * DELETE /modules/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function markInputIndex(){
        return View::make('modules.index_mark_input')->with('students', DB::table('students')->select(DB::raw('max(id) as id,title,initials_1,initials_2,initials_3,forename_1,forename_2,forename_3,surname,ls_student_number ,san'))
            ->groupBy('san')
            ->get());
    }

    public function markInputShow($ls_student_number){
        return View::make('modules.show_mark_input');
    }

    public function markInputCreate(){
        return View::make('modules.create_mark_input')
            ->with('ls_student_numbers',Student::lists('ls_student_number','ls_student_number'))
            ->with('modules',Module::lists('name','id'))
            ->with('elements',ModuleElement::lists('name','id'));
    }

    public function getModulesByLsStudentNumber(){
        $ls_student_number = Input::get('option');
        $san = Student::where('ls_student_number','=',$ls_student_number)->first()->san;
        $course_id =  StudentCourseEnrolment::where('san','=',$san)->first()->course_name;
        $course_name = ApplicationCourse::where('id','=',$course_id)->first()->name;
        return array(Module::where('course_id','=',$course_id)->lists('name','id'),$course_name);
    }

    public function getElementsByModuleID(){
        $module_id = Input::get('option');
        return ModuleElement::where('module_id','=',$module_id)->lists('name','id');
    }

    public function getStudentMarks(){
        $ls_student_number = Input::get('ls_student_number');
        $element = Input::get('element');
        //$student_module_marks = DB::table('student_module_marks_input')->select('*')->where('ls_student_number','=',$ls_student_number)->where('element','=',$element)->get();
        $student_module_marks = StudentModuleMarksInput::where('ls_student_number','=',$ls_student_number)->where('element','=',$element)->first()->toArray();
        return $student_module_marks;
    }

    public function saveMarkInputs(){
        //return Input::get();
        $student_module_marks_input = new StudentModuleMarksInput();
        $student_module_marks_input->ls_student_number = Input::get('ls_student_number');
        //$student_module_marks_input->san = Input::get('san');
        $student_module_marks_input->test = Input::get('test');
        $student_module_marks_input->test_remark = Input::get('test_remark');
        $student_module_marks_input->course = Input::get('course');
        $student_module_marks_input->course_remark = Input::get('course_remark');
        $student_module_marks_input->retake = Input::get('retake');
        $student_module_marks_input->retake_remark = Input::get('retake_remark');
        $student_module_marks_input->element = Input::get('element');
        $student_module_marks_input->comments = Input::get('comments');

        if($student_module_marks_input->save()){
            return 'Added';
        }else{
            return 'error';
        }
    }

}