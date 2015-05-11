@extends('layouts.main')
@section('post_css')
   <link rel="stylesheet" href="js/datatables/datatables.css" type="text/css"/>
@stop

@section('content')


   <div class="m-b-md">
	<form class="navbar-form navbar-left " role="search">
        <div class="form-group">
        <h3 class="m-b-none">Students Admissions</h3><br/>
          <div class="input-group">
            <span class="input-group-btn">
              <span class="btn btn-sm bg-white b-white btn-icon" style="min-height:50px;font-size:24px;"><i class="fa fa-search"></i></span>
            </span>
            <input type="text" style="min-height:50px;font-size:24px;" id="search_text" class="form-control input-sm no-border" placeholder="Search SAN , LS SN , Name , Mobile , Country ...">
          </div>

        </div>
      </form>
              </div>

              <br>
              <header class="panel-heading">
                                DataTables
                                <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
                              </header>
                              <div class="table-responsive">
                                <table class="table table-striped m-b-none" data-ride="datatables">
                                  <thead>
                                    <tr>
                                      <th width="20%">Rendering engine</th>
                                      <th width="25%">Browser</th>
                                      <th width="25%">Platform(s)</th>
                                      <th width="15%">Engine version</th>
                                      <th width="15%">CSS grade</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($students as $student)
                                      <tr>
                                      <td>{!! $student->san !!}</td>
                                      <td>{!! $student->ls_student_number !!}</td>
                                      <td>{!! $student->title.' '.$student->initials_1.' '.$student->initials_2.' '.$student->initials_3.' '.$student->forename_1.' '.$student->forename_2.' '.$student->forename_3.' '.$student->surname!!}</td>
                                      </tr>
                                  @endforeach
                                  </tbody>
                                </table>
           </div>



@stop


 @section('post_scripts')

<script src="js/datatables/jquery.dataTables.min.js"></script>
<script>

  $('#student_datatable').dataTable();


  oTable = $('#student_datatable').dataTable();
$('#search_text').keyup(function(){
       oTable.fnFilter($(this).val());
})

</script>
@stop