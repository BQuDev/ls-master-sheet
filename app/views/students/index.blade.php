@extends('layouts.main')


@section('content')

<div class="m-b-md">
	<form class="navbar-form navbar-left " role="search">
        <div class="form-group">
          <div class="input-group" style="min-width:1080px;">
            <span class="input-group-btn">
              <span class="btn btn-sm bg-white b-white btn-icon" style="min-height:50px;font-size:24px;"><i class="fa fa-search"></i></span>
            </span>
            <input type="text" style="min-height:50px;font-size:24px;" id="search_text" class="form-control input-sm no-border" placeholder="Search SAN , LS SN , Name ...">
          </div>

        </div>
      </form>
      </div>

              <br>
              <br>


 <section class="panel panel-default">

                <div class="table-responsive">
                  <table class="table table-striped m-b-none" data-ride="datatables" id="student_datatable">
                    <thead>
                      <tr>
                        <th width="20%">SAN</th>
                        <th width="20%">LS SN</th>
                        <th width="35%">NAME(s)</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($students as $student)
                       <tr>
                           <td>{{ $student->san }}</td>
                           <td>{{ $student->ls_student_number }}</td>
                           <td>{{ $student->title.' '.$student->initials_1.' '.$student->initials_2.' '.$student->initials_3.' '.$student->forename_1.' '.$student->forename_2.' '.$student->forename_3.' '.$student->surname }}</td>
                           <td><a class="btn btn-sm btn-primary" href="{{ URL::to('/students/'.$student->san.'/edit') }}">More</a></td>
                         </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
              </section>
@stop


@section('post_css')
{{ HTML::style('js/datatables/datatables.css'); }}
@stop

@section('post_js')
  {{ HTML::script('js/datatables/jquery.dataTables.min.js'); }}
  <script>

    $('#student_datatable').dataTable();


    oTable = $('#student_datatable').dataTable();
  $('#search_text').keyup(function(){
         oTable.fnFilter($(this).val());
  })

  $('#student_datatable_filter').hide();
  </script>

@stop

@section('main_menu')
 <li >
                      <a href="{{ URL::to('/students') }}/">
                        <i class="i i-statistics icon">
                        </i>
                        <span class="font-bold">All Admissions</span>
                      </a>
                    </li>
                 <li >
              <a href="{{ URL::to('/students/create') }}/">

                 <i class="i i-stack icon">
                 </i>
                 <span class="font-bold">New Admission</span>
               </a>

             </li>
                 <li >
              <a href="{{ URL::to('/export') }}/">

                 <i class="i i-stack icon">
                 </i>
                 <span class="font-bold">Export</span>
               </a>

             </li>
 @stop