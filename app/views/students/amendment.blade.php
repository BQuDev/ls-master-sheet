@extends('layouts.main')


@section('content')
<div class="row" style="min-height: 50px;"></div>
<div class="row">
   <div class="col-sm-12">
   </div>
</div>
<div class="row">
   <div class="col-sm-5">

 <section class="panel panel-default">
       <header class="panel-heading font-bold">STUDENT MAIN INFORMATION</header>
       <div class="panel-body">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%">{{ Form::label('san', 'Student Application Number (SAN)', array('class' => 'control-label'));  }}</td>
    <td width="53%">{{ $student->san  }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'control-label'));  }}</td>
    <td>{{ $student->ls_student_number }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('app_date', 'App Date', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentSource->app_date_date.'-'.$studentSource->app_date_month.'-'.$studentSource->app_date_year }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('ams_date', 'AMS Date', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentSource->ams_date_date.'-'.$studentSource->ams_date_month.'-'.$studentSource->ams_date_year }}</td>
  </tr>
</table>


              


      </div>
  </section>
   </div>
   <!-- Edit -->
   <div class="col-sm-7">
 <section class="panel panel-default">
       <header class="panel-heading font-bold">STUDENT MAIN INFORMATION</header>
       <div class="panel-body">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"> {{ Form::label('san', 'Student Application Number (SAN)', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('san',  $student->san ,['placeholder'=>'Student Application Number (SAN)','class'=>'form-control','data-required'=>'true','minlength'=>"5"]); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('ls_student_number', $student->ls_student_number,['placeholder'=>'LS Student Number','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('app_date', 'App Date', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('app_date_date', $studentSource->app_date_date,['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('app_date_month', $studentSource->app_date_month,['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('app_date_year', $studentSource->app_date_year,['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>

    
                                   
                                    </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('ams_date', 'AMS Date', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('ams_date_date', $studentSource->ams_date_date,['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('ams_date_month', $studentSource->ams_date_month,['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('ams_date_year', $studentSource->ams_date_year,['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>

    
                                      
                                       </td>
  </tr>
</table>

                      
      </div>
  </section>

   </div>
</div>


<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
                  <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>
                  <div class="panel-body">
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"> {{ Form::label('information_source', 'Information Source', array('class' => 'control-label'));  }}</td>
    <td> {{  DB::table('application_sources')->where('id', $studentSource->information_source)->pluck('name'); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('admission_manager', 'Admission manager', array('class' => 'control-label'));  }}</td>
    <td>{{  DB::table('application_admission_managers')->where('id', $studentSource->admission_manager)->pluck('name'); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'control-label'));  }}</td>
    <td>@if ($studentSource->admission_manager == 6)
                     {{  DB::table('application_laps')->where('id', $studentSource->admission_manager)->pluck('name'); }}
                @else
                     {{  DB::table('application_agents')->where('id', $studentSource->admission_manager)->pluck('name'); }}
                @endif</td>
  </tr>
</table>

  
         </div>
               </section>
   </div>
   <div class="col-sm-7">

       <section class="panel panel-default">
                  <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>
                  <div class="panel-body">
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"> {{ Form::label('information_source', 'Information Source', array('class' => ' control-label'));  }}</td>
    <td> {{ Form::select('information_source', $information_sources,'',['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('admission_manager', 'Admission manager', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::select('admission_manager',  $admission_managers,'',['class'=>'chosen-select col-sm-12']);  }} </td>
    <td>{{ Form::text('admission_managers_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</td>
  </tr>
</table>

   
    </td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::select('agents_laps', $agents_laps,'',['class'=>'chosen-select col-sm-12']);  }} </td>
    <td>{{ Form::text('agents_laps_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</td>
  </tr>
</table>
</td>
  </tr>
</table>

         </div>
     </section>
   </div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
      <header class="panel-heading font-bold">PERSONAL DATA</header>
     <div class="panel-body">
     
     <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"><label class="control-label">Title</label></td>
    <td>{{ $student->title }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('initials', 'Initials', array('class' => 'control-label'));  }}</td>
    <td>{{ $student->initials_1 }}&nbsp;{{ $student->initials_2 }}&nbsp;{{ $student->initials_3 }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('forename_1', 'Forename 1', array('class' => 'control-label'));  }}</td>
    <td>{{ $student->forename_1 }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_2', 'Forename 2', array('class' => 'control-label'));  }}</td>
    <td>{{ $student->forename_2 }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('forename_3', 'Forename 3', array('class' => 'control-label'));  }}</td>
    <td>{{ $student->forename_3 }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td>{{ $student->surname }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Gender</label></td>
    <td>{{ $student->gender }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'Date of birth', array('class' => 'control-label'));  }}</td>
    <td>{{ $student->date_of_birth_date.'-'.$student->date_of_birth_month.'-'.$student->date_of_birth_year }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('nationality', 'Nationality', array('class' => 'control-label'));  }}</td>
    <td>{{ StaticNationality::getNameByID($student->nationality)  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('passport', 'Passport number', array('class' => 'control-label'));  }}</td>
    <td>{{ $student->passport  }}</td>
  </tr>
</table>

                             
                                 
     </section>
  </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
      <header class="panel-heading font-bold">PERSONAL DATA</header>
      <div class="panel-body">
      
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"> <label class="control-label">Title</label></td>
    <td><div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Mr.',true); }}
                                       <i></i>
                                       Mr
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Mrs.'); }}
                                       <i></i>
                                       Mrs
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Miss.'); }}
                                       <i></i>
                                       Miss
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Ms.'); }}
                                       <i></i>
                                       Ms
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Dr.'); }}
                                       <i></i>
                                       Dr
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Other.'); }}
                                       <i></i>
                                       Other
                                       </label>
            </div></td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('initials', 'Initials', array('class' => ' control-label'));  }}</td>
    <td> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('initials_1',  $student->initials_1 ,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</td>
    <td>{{ Form::text('initials_2', $student->initials_2,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</td>
    <td>{{ Form::text('initials_3', $student->initials_3,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</td>
  </tr>
</table>

   
    
    
    </td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('forename_1', 'Forename 1', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('forename_1', $student->forename_1,['placeholder'=>'Forename 1','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_2', 'Forename 2', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('forename_2', $student->forename_2,['placeholder'=>'Forename 2','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Forename 3', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('forename_3', $student->forename_3,['placeholder'=>'Forename 3','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('surname', $student->surname,['placeholder'=>'Surname','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Gender</label></td>
    <td>  <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('gender', 'Male',true); }}
                                       <i></i>
                                       Male
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('gender', 'Female'); }}
                                       <i></i>
                                       Female
                                       </label>
            </div></td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'Date of birth', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('date_of_birth_date', $student->date_of_birth_date,['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('date_of_birth_month', $student->date_of_birth_month,['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('date_of_birth_year', $student->date_of_birth_year,['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('nationality', 'Nationality', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('nationality', $nationalities,$student->nationality,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('passport', 'Passport number', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('passport', $student->passport,['placeholder'=>'Passport number','class'=>'form-control']); }}</td>
  </tr>
</table>

                              
                              
         </div>
      </section>
  </div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">CONTACT INFORMATION</header>
           <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Term time</div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>

                      <div class="panel-body">
                      
                      
                      
                      <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"><label class="control-label">Address line 1</label></td>
    <td>{{ $ttStudentContactInformation->address_1  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Address line 2</label></td>
    <td>{{ $ttStudentContactInformation->address_2  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Town/City</label></td>
    <td> {{ $ttStudentContactInformation->city  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Post code</label></td>
    <td> {{ $ttStudentContactInformation->post_code  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Country</label></td>
    <td> {{ $ttStudentContactInformation->country  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Mobile</label></td>
    <td>+&nbsp;&nbsp;{{ $ttStudentContactInformation->mobile  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Landline</label></td>
    <td> +&nbsp;&nbsp;{{ $ttStudentContactInformation->landline  }}</td>
  </tr>
</table>

                                 
                            
                                  
         </div>
                    <!-- Country of origin -->
                    <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Permanent</div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="panel-body">
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"> <label class="control-label">Address line 1</label></td>
    <td>{{ $studentContactInformation->address_1  }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Address line 2</label></td>
    <td>{{ $studentContactInformation->address_2  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Town/City</label></td>
    <td>{{ $studentContactInformation->city  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Post code</label></td>
    <td>{{ $studentContactInformation->post_code  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Country</label></td>
    <td> {{ $studentContactInformation->country  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Mobile</label></td>
    <td>+ {{ $studentContactInformation->mobile  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Landline</label></td>
    <td> + {{ $studentContactInformation->landline  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('email', 'Email ', array('class' => 'control-label'));  }}</td>
    <td>+ {{ $studentContactInformationOnline->email  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('alternative_email', 'Alternative Email', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentContactInformationOnline->alternative_email  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Facebook', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentContactInformationOnline->facebook  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'LinkedIn', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentContactInformationOnline->linkedin  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Twitter', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentContactInformationOnline->twitter  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Other Social', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentContactInformationOnline->other_social  }}</td>
  </tr>
</table>

               
                       
         </div>
            </section>
     </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
      <header class="panel-heading font-bold">CONTACT INFORMATION</header>
    <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Term time</div>
             <div class="line line-dashed b-b line-lg pull-in"></div>

               <div class="panel-body">
               <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"><label class="control-label">Address line 1</label></td>
    <td> {{ Form::text('tt_address_1', '',['placeholder'=>'Address line 1','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Address line 2</label></td>
    <td>{{ Form::text('tt_address_2', '',['placeholder'=>'Address line 2','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Town/City</label></td>
    <td>{{ Form::text('tt_city', '',['placeholder'=>'Town/City','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Post code</label></td>
    <td>{{ Form::text('tt_post_code', '',['placeholder'=>'Post code','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Country</label></td>
    <td>{{ Form::select('tt_country', $countries,'',['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Mobile</label></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>+&nbsp;&nbsp;</td>
    <td> {{ Form::text('tt_mobile_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('tt_mobile_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('tt_mobile_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('tt_mobile', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Landline</label></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td>+&nbsp;&nbsp;</td>
    <td>{{ Form::text('tt_landline_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('tt_landline_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('tt_landline_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}</td>
       <td> {{ Form::text('tt_landline', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
</table>

                        
         </div>
             <!-- Country of origin -->
             <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Permanent</div>
             <div class="line line-dashed b-b line-lg pull-in"></div>
             <div class="panel-body">
             
             <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"> <label class="control-label">Address line 1</label></td>
    <td>{{ Form::text('address_1', '',['placeholder'=>'Address line 1','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Address line 2</label></td>
    <td>{{ Form::text('address_2', '',['placeholder'=>'Address line 2','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Town/City</label></td>
    <td>{{ Form::text('city', '',['placeholder'=>'Town/City','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Post code</label></td>
    <td>{{ Form::text('post_code', '',['placeholder'=>'Post code','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Country</label></td>
    <td>{{ Form::select('country', $countries,'',['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Mobile</label></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>+&nbsp;&nbsp;</td>
    <td>{{ Form::text('mobile_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('mobile_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('mobile_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('mobile', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Landline</label></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>+&nbsp;&nbsp;
                                          
                                          
                                          
                  </td>
    <td>{{ Form::text('landline_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('landline_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('landline_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('landline', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('email', 'Email ', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('email', '',['placeholder'=>'Email','class'=>'form-control','data-parsley-type'=>'email']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('alternative_email', 'Alternative Email', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('alternative_email', '',['placeholder'=>'Alternative Email','class'=>'form-control','data-parsley-type'=>'email']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Facebook', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('facebook', '',['placeholder'=>'Facebook','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'LinkedIn', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('linkedin', '',['placeholder'=>'LinkedIn','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('forename_3', 'Twitter', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('twitter', '',['placeholder'=>'Twitter','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Other Social', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('other_social', '',['placeholder'=>'Other','class'=>'form-control']); }}</td>
  </tr>
</table>

         </div>
     </section>
     </div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">Next of Kin Details</header>

                     <div class="panel-body">
                     
                     
                     <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"> <label class="control-label">Title</label></td>
    <td>Mr.</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('next_of_kin_forename', 'Forename', array('class' => 'control-label'));  }}</td>
    <td>sdsdd</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('next_of_kin_surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td>sdsd</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Telephone</label></td>
    <td>+2243434343434</td>
  </tr>
</table>

                                     
                                     
         </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">Next of Kin Details</header>
                   <div class="panel-body">
                   
                   <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"><label class="control-label">Title</label></td>
    <td>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Mr.',true); }}
                                              <i></i>
                                              Mr
                                              </label>
              </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Mrs.'); }}
                                              <i></i>
                                              Mrs
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Miss.'); }}
                                              <i></i>
                                              Miss
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Ms.'); }}
                                              <i></i>
                                              Ms
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Dr.'); }}
                                              <i></i>
                                              Dr
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Other.'); }}
                                              <i></i>
                                              Other
                                              </label>
                                           </div>
            </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('next_of_kin_forename', 'Forename', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('next_of_kin_forename', '',['placeholder'=>'Forename','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('next_of_kin_surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('next_of_kin_surname', '',['placeholder'=>'Surname','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Telephone</label></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>+&nbsp;&nbsp;</td>
    <td> {{ Form::text('next_of_kin_telephone_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                                                             
                                                                           
                  </td>
    <td>{{ Form::text('next_of_kin_telephone_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('next_of_kin_telephone_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('next_of_kin_telephone', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
</table>
                                    
                                     <div class="form-group">
                                        
                                          <div class="col-sm-9">
                                                         <div class="form-inline">
                                                                             
                                                                            
                                            </div>
                                                      </div>
                                     </div>
                                  </div>
      </section>
</div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">COURSE DETAILS</header>

                     <div class="panel-body">
                     
                     
                     <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"> {{ Form::label('course_name', 'Course Name', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('awarding_body', 'Awarding Body', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('intake1', 'Intake', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Study mode</label></td>
    <td>&nbsp;</td>
  </tr>
</table>

                                         
                                                                   
         </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">COURSE DETAILS</header>
                      <div class="panel-body">
                                             
                                     <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%">{{ Form::label('course_name', 'Course Name', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('course_name', $course_names,'',['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label"></label></td>
    <td>
                                                          <div class="radio-inline i-checks">
                                                                  <label>
                                                                  {{ Form::radio('course_level', 'Top - Up',true); }}
                                                                  <i></i>
                                                                  Top - Up
                                                                  </label>
              </div>
                                                             <div class="radio-inline i-checks">
                                                                <label>
                                                                {{ Form::radio('course_level', 'Advanced Entry'); }}
                                                                <i></i>
                                                                Advanced Entry
                                                                </label>
                                                             </div>

            </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('awarding_body', 'Awarding Body', array('class' => 'control-label'));  }}</td>
    <td> {{ Form::select('awarding_body', $awarding_bodies,'',['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('intake1', 'Intake', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::label('intake_year', 'Year', array('class' => 'control-label'));  }}</td>
    <td> {{ Form::select('intake_year', $intake_year,'',['class'=>'chosen-select']);  }}</td>
    <td>{{ Form::label('intake_month', 'Month', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('intake_month', $intake_month,'',['class'=>'chosen-select']);  }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
<td width="30%">  <label class="control-label">Study mode</label></td>
    <td>
         <div class="radio-inline i-checks">
                                                                              <label>
                                                                              {{ Form::radio('study_mode', 'Blended',true); }}
                                                                              <i></i>
                                                                              Blended
                                                                              </label>
              </div>
    </td>

</tr>
</table>

                                   
                                                                   
         </div>
      </section>
</div>

</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">EDUCATIONAL QUALIFICATIONS</header>

                      <div class="panel-body">
                      
                      <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%">{{ Form::label('english_language_level1', 'English language level', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('qualification_1', 'Qualification 1', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Other</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('institution_1', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_2', 'Qualification 2', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('other', 'Other', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('institution_2', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_3', 'Qualification 3', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Other</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('institution_3', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
 
</table>
             
         </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">EDUCATIONAL QUALIFICATIONS</header>

                      <div class="panel-body">
                      
                     <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%"> {{ Form::label('english_language_level1', 'English language level', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="5%">{{ Form::checkbox('english_language_level[]', 'CITY & GUILDS',false); }}</td>
    <td width="40%">CITY & GUILDS</td>
    <td>{{ Form::checkbox('english_language_level[]', 'IELTS',false); }}</td>
    <td> IELTS</td>
    <td>{{ Form::checkbox('english_language_level[]', 'ESOL',false); }}</td>
    <td> ESOL</td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_1', 'Qualification 1', array('class' => 'control-label'));  }}
            </td>
    <td>{{ Form::select('qualification_1', $education_qualifications,'',['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('institution_1', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('institution_1', '',['placeholder'=>'Institution','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>  {{ Form::text('qualification_start_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('qualification_start_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>
  
                                                                    
                                                                      {{ Form::text('qualification_start_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%">          {{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> 
    {{ Form::text('qualification_end_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>    {{ Form::text('qualification_end_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('qualification_end_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>

   
                                                                  
            </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_grade_1', '',['placeholder'=>'Pass','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_2', 'Qualification 2', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('qualification_2', $education_qualifications,'',['style'=>'width:250px !important','class'=>'chosen-select']);  }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('other', 'Other', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_2_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('institution_2', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('institution_2', '',['placeholder'=>'Institution','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('qualification_start_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                     
                                                                    </td>
    <td> {{ Form::text('qualification_start_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('qualification_start_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('qualification_end_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                    
                                                                   </td>
    <td>  {{ Form::text('qualification_end_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>   {{ Form::text('qualification_end_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td> {{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_grade_2', '',['placeholder'=>'Pass','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_3', 'Qualification 3', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('qualification_3', $education_qualifications,'',['class'=>'chosen-select','style'=>'width:250px !important']);  }}{{ Form::text('qualification_3_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('institution_3', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('institution_3', '',['placeholder'=>'Institution','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label')); }} </td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('qualification_start_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                    
                                                                    </td>
    <td>  {{ Form::text('qualification_start_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('qualification_start_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('qualification_end_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                     
                                                                    </td>
    <td> {{ Form::text('qualification_end_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('qualification_end_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_grade_3', '',['placeholder'=>'Pass','class'=>'form-control']); }}</td>
  </tr>
 
                     </table>
 
      
                  </div>
      </section>
</div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">WORK EXPERIENCE</header>

                      <div class="panel-body">
                      <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%">{{ Form::label('occupation_1', 'Occupation 1', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('company_name_1', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('main_duties_and_responsibilities_1', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td>{{ Form::label('forename_2', 'Occupation 2', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>  {{ Form::label('company_name_2', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('main_duties_and_responsibilities_2', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td>{{ Form::label('forename_2', 'Occupation 3', array('class' => 'control-label'));  }}</td>
    <td></td>
  </tr>
  <tr>
    <td>{{ Form::label('company_name_3', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('main_duties_and_responsibilities_3', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>

         </table>

                        
                              
                              
                              
                              
                  </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">WORK EXPERIENCE</header>

                      <div class="panel-body">
                      
                      <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%">{{ Form::label('occupation_1', 'Occupation 1', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('occupation_1', '',['placeholder'=>'Occupation','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('company_name_1', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('company_name_1', '',['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%" valign="top"> {{ Form::label('main_duties_and_responsibilities_1', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::textarea('main_duties_and_responsibilities_1', '',['placeholder'=>'','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('occupation_start_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('occupation_start_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>   {{ Form::text('occupation_start_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%">  {{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('occupation_end_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_end_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>   {{ Form::text('occupation_end_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%">&nbsp;</td>
    <td><div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_1', 'Yes',false); }}
                                       <i></i>
                                       Currently working
                                       </label>
          </div></td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td>{{ Form::label('forename_2', 'Occupation 2', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('occupation_2', '',['placeholder'=>'Occupation','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td> {{ Form::label('company_name_2', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('company_name_2', '',['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td valign="top">{{ Form::label('main_duties_and_responsibilities_2', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::textarea('main_duties_and_responsibilities_2', '',['placeholder'=>'','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('occupation_start_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('occupation_start_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('occupation_start_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('occupation_end_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_end_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_end_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_2', 'Yes',false); }}
                                       <i></i>
                                       Currently working
                                       </label>
                                    </div></td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td>{{ Form::label('forename_2', 'Occupation 3', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('occupation_3', '',['placeholder'=>'Occupation','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('company_name_3', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('company_name_3', '',['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td valign="top"> {{ Form::label('main_duties_and_responsibilities_3', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::textarea('main_duties_and_responsibilities_3', '',['placeholder'=>'','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>     {{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('occupation_start_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('occupation_start_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_start_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>        {{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('occupation_end_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_end_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('occupation_end_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td> <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_3', 'Yes',false); }}
                                       <i></i>
                                       Currently working
                                       </label>
            </div></td>
  </tr>
                      </table>

                              
                              
                              
                              
                              
                              
  </div>
      </section>
</div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">PAYMENT INFORMATION</header>

                      <div class="panel-body">
                      
                      <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td> {{ Form::label('date_of_birth', 'Course fees', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('date_of_birth', 'Payment Status', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>{{ Form::label('total_fee', 'Total fee', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  
<tr>
    <td>{{ Form::label('deposit', 'Deposit', array('class' => 'control-label'));  }} </td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%"> {{ Form::label('date_of_birth', 'Date', array('class' => 'control-label'));  }} </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));}}</td>
    <td>&nbsp;</td>
  </tr>
    </table>

  </td>
  </tr>

     <tr>
    <td>{{ Form::label('forename_3', 'Instalment 1', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">{{ Form::label('date_of_birth', 'Date', array('class' => 'control-label'));  }}</td>
    <td width="38%">&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</td>
  </tr>
 <tr>
    <td>{{ Form::label('forename_3', 'Instalment 2', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">{{ Form::label('date_of_birth', 'Date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</td>
  </tr>

 <tr>
    <td> {{ Form::label('forename_3', 'Instalment 3', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">{{ Form::label('date_of_birth', 'Date', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('instalment_payment_method_3', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</td>
  </tr>

<tr>
    <td> {{ Form::label('late_admin_fee', 'Late admin fee', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>{{ Form::label('late_fee', 'Late fee', array('class' => 'control-label'));  }}</td>
    <td>&nbsp;</td>
  </tr>
 
</table>
                      
                      

                           </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">PAYMENT INFORMATION</header>

                     <div class="panel-body">
                     
                     <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%">  {{ Form::label('date_of_birth', 'Course fees', array('class' => 'control-label'));  }}</td>
    <td>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::checkbox('course_fees[]', 'Self funded',false); }}</td>
    <td><i></i>Self funded</td>
    <td>{{ Form::checkbox('course_fees[]', 'Sponsored by the Company',false); }}</td>
    <td><i></i>Sponsored by the Company</td>
    <td>{{ Form::checkbox('course_fees[]', 'Bank Loan',false); }}</td>
    <td><i></i>Bank Loan</td>
  </tr>
</table>

                                        
                                          
                                          
            </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'Payment Status', array('class' => 'control-label'));  }}</td>
    <td>   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::checkbox('payment_status[]', 'Paid in full',false); }}</td>
    <td>Paid in full</td>
    <td>{{ Form::checkbox('payment_status[]', 'Unpaid',false); }}</td>
    <td> Unpaid</td>
    <td>{{ Form::checkbox('payment_status[]', 'Deposit paid',false); }}</td>
    <td>Deposit paid</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('total_fee', 'Total fee', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('total_fee', '',['placeholder'=>'Total fee','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('deposit', 'Deposit', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('deposit', '',['placeholder'=>'Deposit','class'=>'form-control']); }}</td>
    <td>{{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td> {{ Form::text('deposit_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
          
          </td>
        <td> {{ Form::text('deposit_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
        <td>   {{ Form::text('deposit_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
        </tr>
  </table>
</td>
    </tr>
    </table>
</td>
  </tr>
  
  <tr>
    <td width="30%">{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('deposit_payment_method_1', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Instalment 1', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('instalment_1', '',['placeholder'=>'Instalment 1','class'=>'form-control']); }}</td>
    <td>{{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>{{ Form::text('instalment_1_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
          
          </td>
        <td> {{ Form::text('instalment_1_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
        <td> {{ Form::text('instalment_1_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
        </tr>
  </table>
</td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('instalment_payment_method_1', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Instalment 2', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('instalment_2', '',['placeholder'=>'Instalment 2','class'=>'form-control']); }}</td>
    <td> {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td> {{ Form::text('instalment_2_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
          
          </td>
        <td> {{ Form::text('instalment_2_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
        <td>{{ Form::text('instalment_2_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
        </tr>
  </table>
</td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('instalment_payment_method_2', $method_of_payment,'',['class'=> 'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Instalment 3', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('instalment_3', '',['placeholder'=>'Instalment 3','class'=>'form-control']); }}</td>
    <td>{{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td> {{ Form::text('instalment_3_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
          
          </td>
        <td>{{ Form::text('instalment_3_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
        <td>{{ Form::text('instalment_3_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
        </tr>
  </table>
</td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('instalment_payment_method_3', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('instalment_payment_method_3', $method_of_payment,'',['class'=> 'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('late_admin_fee', 'Late admin fee', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('late_admin_fee', '',['placeholder'=>'Late admin fee','class'=>'form-control']); }}</td>
  </tr>
   <tr>
    <td width="30%">{{ Form::label('late_fee', 'Late fee', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('late_fee', '',['placeholder'=>'Late fee','class'=>'form-control']); }}</td>
  </tr>
</table>

                              
         </div>
                           
                           
                           
                           
                           
      </section>
      
      
</div>
</div>
 @stop

















@section('main_menu')

 @stop


 @section('post_css')
 {{ HTML::style('js/chosen/chosen.css'); }}
 @stop

 @section('post_js')
 <script type="text/javascript">

 $(function() {

 /*
 document.getElementById('tt_country').value = '236';

 $('#tt_country').trigger('chosen:updated');

 */
 // $( "#qualification_container_2" ).hide();
 // $( "#qualification_container_3" ).hide();
  $( "#occupation_container_2" ).hide();
  $( "#occupation_container_3" ).hide();



 $( "#san" ).keydown(function() {
     $('#top_san_display').html('SAN : '+this.value);
  // $('#top_san_display').append($(this).val());

 });
 $( "#ls_student_number" ).keydown(function() {
     $('#top_lssn_display').html('LS SN : '+this.value);
  // $('#top_lssn_display').append($(this).val());
 });



 $('[name="agents_laps"]').append("<option value='1000'>Other</option>");
 $('[name="agents_laps"]').prepend("<option value='0'>Not Applicable</option>");
  $('[name="agents_laps"]').trigger("chosen:updated");

 $('[name="admission_manager"]').append("<option value='1000'>Other</option>");
  $('[name="admission_manager"]').trigger("chosen:updated");

 $('[name="admission_manager"]').prepend("<option value='0'>Not Applicable</option>");
  $('[name="admission_manager"]').trigger("chosen:updated");

 $('[name="qualification_1"]').append("<option value='0'>Other</option>");
 $('[name="qualification_1"]').trigger("chosen:updated");

 $('[name="tt_country"]').prepend("<option value='0'>Please select a country</option>");

 $('[name="tt_country"]').trigger("chosen:updated");

 $('[name="country"]').prepend("<option value='0'>Please select a country</option>");

 $('[name="country"]').trigger("chosen:updated");

     $('[name="agents_laps"]').change(function(){
         if($(this).val() == 1000){
             $('[name="agents_laps_other"]').show();
         }else{
             $('[name="agents_laps_other"]').hide();
         }
  });

     $('[name="admission_manager"]').change(function(){
         if($(this).val() == 1000){
             $('[name="admission_managers_other"]').show();
         }else{
             $('[name="admission_managers_other"]').hide();
         }
  });

 //$('[name="agent_laps"]').trigger("chosen:updated");

 $('[name="qualification_1_other"]').hide();
 $('[name="agents_laps_other"]').hide();
 $('[name="admission_managers_other"]').hide();

     $('[name="qualification_1"]').change(function(){
         if($(this).val() == 0){
             $('[name="qualification_1_other"]').show();
         }else{
             $('[name="qualification_1_other"]').hide();
         }
  });



 $('[name="qualification_2"]').append("<option value='0'>Other</option>");
 $('[name="qualification_2"]').trigger("chosen:updated");
 $('[name="qualification_2_other"]').hide();

     $('[name="qualification_2"]').change(function(){
         if($(this).val() == 0){
             $('[name="qualification_2_other"]').show();
         }else{
             $('[name="qualification_2_other"]').hide();
         }
  });

 $('[name="qualification_3"]').append("<option value='0'>Other</option>");
 $('[name="qualification_3"]').trigger("chosen:updated");
 $('[name="qualification_3_other"]').hide();

     $('[name="qualification_3"]').change(function(){
         if($(this).val() == 0){
             $('[name="qualification_3_other"]').show();
         }else{
             $('[name="qualification_3_other"]').hide();
         }
  });



     $('#admssion_manager').change(function(){

 				$.ajax({
                   url: "{{ url('index.php/admission_manager/dropdown')}}",
                   data: {token: $('[name="_token"]').val(),option: $('#admssion_manager').val()},
                   success: function (data) {console.log('success');
                   $('[name="agent_names"]').empty();

                       var model = $('[name="agent_names"]');
                         model.empty();
                          model.append("<option value=''>Not Applicable</option>");

                         $.each(data, function(index, element) {

                             model.append("<option value='"+ index +"'>" + element + "</option>");
                         });



                         $('[name="agent_names"]').trigger("chosen:updated");
                        },
                           type: "GET"

                 });
 		});

     $('#agent_type').change(function(){

 				$.ajax({
                   url: "{{ url('index.php/agent_type/dropdown')}}",
                   data: {token: $('[name="_token"]').val(),option: $('#agent_type').val()},
                   success: function (data) {console.log('success');
                   $('[name="admssion_manager"]').empty();

                       var model = $('[name="admssion_manager"]');
                         model.empty();
                          model.append("<option value='0'>Not Applicable</option>");

                         $.each(data, function(index, element) {

                             model.append("<option value='"+ index +"'>" + element + "</option>");
                         });

                         $('[name="admssion_manager"]').trigger("chosen:updated");
                        },
                           type: "GET"

                 });
 		});



     $('#intake_year').change(function(){

 				$.ajax({
                   url: "{{ url('index.php/intake_month/dropdown')}}",
                   data: {token: $('[name="_token"]').val(),option: $('#intake_year').val()},
                   success: function (data) {
                   $('[name="intake_month"]').empty();

                       var model = $('[name="intake_month"]');
                         model.empty();

                         $.each(data, function(index, element) {

                             model.append("<option value='"+ index +"'>" + element + "</option>");
                         });
                         $('[name="intake_month"]').trigger("chosen:updated");
                        },
                           type: "GET"

                 });
 		});


 });


/*

 $( "#add_more_qualifications" ).click(function() {
       $( "#qualification_container_2" ).show( "slow", function() { });
       $( "#add_more_qualifications" ).hide();
   });

 $( "#add_more_qualifications_2" ).click(function() {
       $( "#qualification_container_3" ).show( "slow", function() { });
       $( "#add_more_qualifications_2" ).hide();
   });
*/

 $( "#add_more_occupations_1" ).click(function() {
       $( "#occupation_container_2" ).show( "slow", function() { });
       $( "#add_more_occupations_1" ).hide();
   });

 $( "#add_more_occupations_2" ).click(function() {
       $( "#occupation_container_3" ).show( "slow", function() { });
       $( "#add_more_occupations_2" ).hide();
   });


 $( "#san" ).keydown(function() {
     $('#top_san_display').html('SAN : '+this.value);
  // $('#top_san_display').append($(this).val());

 });
 $( "#ls_student_number" ).keydown(function() {
     $('#top_lssn_display').html('LS SN : '+this.value);
  // $('#top_lssn_display').append($(this).val());
 });
 function checkSanAvailability(){
 	if(!isEmpty($('#san').val())){
 					$.ajax({
                   url: "{{ url('checkSanAvailability')}}",
                   data: {token: $('[name="_token"]').val(),option: $('#san').val()},
                   success: function (data) {
                   console.log(data);
 				  if(data =='Available'){
 					  $('#san').removeClass("parsley-error").addClass( "parsley-success" );
 					  $('#san_not_available').hide();

 				  }else{
 					  $('#san').removeClass("parsley-success").addClass( "parsley-error" );
 					   $('#san_not_available').show();
 				  }
                        },
                           type: "GET"

                 });}
 }
  $('#san_not_available').hide();

  function isEmpty(str) {
     // return (!str || 0 === str.length);
     return (!str || /^\s*$/.test(str));
  }

 </script>

  {{ HTML::script('js/chosen/chosen.jquery.min.js'); }}
   <!-- parsley -->
 {{ HTML::script('js/parsley/parsley.min.js'); }}
 {{ HTML::script('js/parsley/parsley.extend.js'); }}
 <style>
 #san.parsley-success{
   color: #468847;
   background-color: #DFF0D8;
   border: 1px solid #D6E9C6;
 }

 #san.parsley-error {
   color: #B94A48;
   background-color: #F2DEDE;
   border: 1px solid #EED3D7;
 }

 </style>
 @stop