@extends('layouts.main')


@section('content')
{{ Form::open(array('url' =>URL::to("/").'/students',  'class'=>'form-horizontal','method' => 'post','data-validate'=>'parsley')) }}
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
    <td width="53%">{{ $data_student->san  }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student->ls_student_number }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('app_date', 'App Date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentSource->app_date }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('ams_date', 'AMS Date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentSource->ams_date }}</td>
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
    <td>{{ Form::text('san',  $data_student->san ,['placeholder'=>'Student Application Number (SAN)','class'=>'form-control','data-required'=>'true','minlength'=>"5"]); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('ls_student_number', $data_student->ls_student_number,['placeholder'=>'LS Student Number','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('app_date', 'App Date', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
     <?php
                    $app_date = explode('-',$data_studentSource->app_date)
                ?>
    {{ Form::text('app_date_date',$app_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('app_date_month',$app_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('app_date_year', $app_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>

    
                                   
                                    </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('ams_date', 'AMS Date', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
     <?php
                     $ams_date = explode('-',$data_studentSource->ams_date)
                 ?>

     {{ Form::text('ams_date_date', $ams_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('ams_date_month', $ams_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('ams_date_year', $ams_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}</td>
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
    <td> @if(intval($data_studentSource->source)>0)
             {{ ApplicationSource::getNameByID(intval($data_studentSource->source)) }}
              @endif
              </td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('admission_manager', 'Admission manager', array('class' => 'control-label'));  }}</td>
    <td>   @if(intval($data_studentSource->admission_manager) == 1000)
                {{ $data_studentSource->admission_managers_other }}
                @elseif(intval($data_studentSource->admission_manager) >0)
                {{ ApplicationAdmissionManager::getNameByID($data_studentSource->admission_manager); }}
                @endif</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'control-label'));  }}</td>
    <td> @if(intval($data_studentSource->agent_lap) == 1000)
            {{ $data_studentSource->agents_laps_other }}
             @elseif(($data_studentSource->admission_manager ==6)&(intval($data_studentSource->agent_lap)>0))
             {{ ApplicationLap::getNameByID($data_studentSource->agent_lap)  }}
             @elseif(intval($data_studentSource->agent_lap)>0)
             {{ApplicationAgent::getNameByID($data_studentSource->agent_lap) }}
             @endif
             </td>
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
    <td> {{ Form::select('information_source', $information_sources,$data_studentSource->source,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('admission_manager', 'Admission manager', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::select('admission_manager',  $admission_managers,$data_studentSource->admission_manager,['class'=>'chosen-select col-sm-12']);  }} </td>
    <td>{{ Form::text('admission_managers_other', $data_studentSource->admission_managers_other,['placeholder'=>'Please specify if other','class'=>'form-control']); }}</td>
  </tr>
</table>

   
    </td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::select('agents_laps', $agents_laps,$data_studentSource->agent_lap,['class'=>'chosen-select col-sm-12','style'=>'width:165px']);  }} </td>
    <td>{{ Form::text('agents_laps_other', $data_studentSource->agents_laps_other,['placeholder'=>'Please specify if other','class'=>'form-control']); }}</td>
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
    <td>{{ $data_student->title }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('initials', 'Initials', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student->initials_1 }}&nbsp;{{ $data_student->initials_2 }}&nbsp;{{ $data_student->initials_3 }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('forename_1', 'Forename 1', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student->forename_1 }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_2', 'Forename 2', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student->forename_2 }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('forename_3', 'Forename 3', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student->forename_3 }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student->surname }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Gender</label></td>
    <td>{{ $data_student->gender }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'Date of birth', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student->date_of_birth }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('nationality', 'Nationality', array('class' => 'control-label'));  }}</td>
    <td>{{ StaticNationality::getNameByID($data_student->nationality)  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('passport', 'Passport number', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student->passport  }}</td>
  </tr>
</table>

                             
                                 
     </div></section>
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
                                       {{ Form::radio('title', 'Mr.',strpos($data_student->title,'Mr.')!==false); }}
                                       <i></i>
                                       Mr
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Mrs.',strpos($data_student->title,'Mrs.')!==false); }}
                                       <i></i>
                                       Mrs
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Miss.',strpos($data_student->title,'Miss.')!==false); }}
                                       <i></i>
                                       Miss
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Ms.',strpos($data_student->title,'Ms.')!==false); }}
                                       <i></i>
                                       Ms
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Dr.',strpos($data_student->title,'Dr.')!==false); }}
                                       <i></i>
                                       Dr
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Other.',strpos($data_student->title,'Other.')!==false); }}
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
    <td> {{ Form::text('initials_1',  $data_student->initials_1 ,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</td>
    <td>{{ Form::text('initials_2', $data_student->initials_2,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</td>
    <td>{{ Form::text('initials_3', $data_student->initials_3,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</td>
  </tr>
</table>

   
    
    
    </td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('forename_1', 'Forename 1', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('forename_1', $data_student->forename_1,['placeholder'=>'Forename 1','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_2', 'Forename 2', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('forename_2', $data_student->forename_2,['placeholder'=>'Forename 2','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Forename 3', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('forename_3', $data_student->forename_3,['placeholder'=>'Forename 3','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('surname', $data_student->surname,['placeholder'=>'Surname','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Gender</label></td>
    <td>  <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('gender', 'Male',strpos($data_student->gender,'Male')!==false); }}
                                       <i></i>
                                       Male
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('gender', 'Female',strpos($data_student->gender,'Female')!==false); }}
                                       <i></i>
                                       Female
                                       </label>
            </div></td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'Date of birth', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
     <?php
        $date_of_birth = explode('-',$data_student->date_of_birth);
    ?>
    {{ Form::text('date_of_birth_date', $date_of_birth[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('date_of_birth_month', $date_of_birth[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('date_of_birth_year', $date_of_birth[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('nationality', 'Nationality', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('nationality', $nationalities,$data_student->nationality,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('passport', 'Passport number', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('passport', $data_student->passport,['placeholder'=>'Passport number','class'=>'form-control']); }}</td>
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
    <td>{{ $data_ttStudentContactInformation->address_1  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Address line 2</label></td>
    <td>{{ $data_ttStudentContactInformation->address_2  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Town/City</label></td>
    <td> {{ $data_ttStudentContactInformation->city  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Post code</label></td>
    <td> {{ $data_ttStudentContactInformation->post_code  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Country</label></td>
    <td> {{ StaticCountry::getNameByID($data_ttStudentContactInformation->country)  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Mobile</label></td>
    <td>+&nbsp;&nbsp;{{ $data_ttStudentContactInformation->mobile  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Landline</label></td>
    <td> +&nbsp;&nbsp;{{ $data_ttStudentContactInformation->landline  }}</td>
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
    <td>{{ $data_studentContactInformation->address_1  }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Address line 2</label></td>
    <td>{{ $data_studentContactInformation->address_2  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Town/City</label></td>
    <td>{{ $data_studentContactInformation->city  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Post code</label></td>
    <td>{{ $data_studentContactInformation->post_code  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Country</label></td>
    <td> {{ StaticCountry::getNameByID($data_studentContactInformation->country)  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Mobile</label></td>
    <td>+ {{ $data_studentContactInformation->mobile  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Landline</label></td>
    <td> + {{ $data_studentContactInformation->landline  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('email', 'Email ', array('class' => 'control-label'));  }}</td>
    <td> {{ $data_studentContactInformationOnline->email  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('alternative_email', 'Alternative Email', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentContactInformationOnline->alternative_email  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Facebook', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentContactInformationOnline->facebook  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'LinkedIn', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentContactInformationOnline->linkedin  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Twitter', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentContactInformationOnline->twitter  }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Other Social', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentContactInformationOnline->other_social  }}</td>
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
    <td> {{ Form::text('tt_address_1', $data_ttStudentContactInformation->address_1,['placeholder'=>'Address line 1','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Address line 2</label></td>
    <td>{{ Form::text('tt_address_2', $data_ttStudentContactInformation->address_2,['placeholder'=>'Address line 2','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Town/City</label></td>
    <td>{{ Form::text('tt_city', $data_ttStudentContactInformation->city,['placeholder'=>'Town/City','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Post code</label></td>
    <td>{{ Form::text('tt_post_code', $data_ttStudentContactInformation->post_code,['placeholder'=>'Post code','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Country</label></td>
    <td>{{ Form::select('tt_country', $countries,$data_ttStudentContactInformation->country,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Mobile</label></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>+&nbsp;&nbsp;</td>

    <td> {{ Form::text('tt_mobile', $data_ttStudentContactInformation->mobile,['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Landline</label></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td>+&nbsp;&nbsp;</td>
       <td> {{ Form::text('tt_landline', $data_ttStudentContactInformation->landline,['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}</td>
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
    <td>{{ Form::text('address_1', $data_studentContactInformation->address_1,['placeholder'=>'Address line 1','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Address line 2</label></td>
    <td>{{ Form::text('address_2',$data_studentContactInformation->address_2,['placeholder'=>'Address line 2','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Town/City</label></td>
    <td>{{ Form::text('city', $data_studentContactInformation->city,['placeholder'=>'Town/City','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Post code</label></td>
    <td>{{ Form::text('post_code', $data_studentContactInformation->post_code,['placeholder'=>'Post code','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Country</label></td>
    <td>{{ Form::select('country', $countries,$data_studentContactInformation->country,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Mobile</label></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>+&nbsp;&nbsp;</td>
      <td>{{ Form::text('mobile', $data_studentContactInformation->mobile,['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}</td>
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
    <td>{{ Form::text('landline', $data_studentContactInformation->landline,['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('email', 'Email ', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('email', $data_studentContactInformationOnline->email,['placeholder'=>'Email','class'=>'form-control','data-parsley-type'=>'email']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('alternative_email', 'Alternative Email', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('alternative_email', $data_studentContactInformationOnline->alternative_email,['placeholder'=>'Alternative Email','class'=>'form-control','data-parsley-type'=>'email']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Facebook', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('facebook', $data_studentContactInformationOnline->facebook,['placeholder'=>'Facebook','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'LinkedIn', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('linkedin',  $data_studentContactInformationOnline->linkedin,['placeholder'=>'LinkedIn','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('forename_3', 'Twitter', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('twitter', $data_studentContactInformationOnline->twitter,['placeholder'=>'Twitter','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Other Social', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('other_social', $data_studentContactInformationOnline->other_social,['placeholder'=>'Other','class'=>'form-control']); }}</td>
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
    <td>{{ $data_student_contact_information_kin_detailes->next_of_kin_title }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('next_of_kin_forename', 'Forename', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_contact_information_kin_detailes->next_of_kin_forename }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('next_of_kin_surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td> {{ $data_student_contact_information_kin_detailes->next_of_kin_surname }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Telephone</label></td>
    <td>{{ $data_student_contact_information_kin_detailes->next_of_kin_telephone }}</td>
  </tr>
  <tr>
    <td width="30%"> <label class="control-label">Email</label></td>
    <td>{{ $data_student_contact_information_kin_detailes->next_of_kin_email }}</td>
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
                                              {{ Form::radio('next_of_kin_title', 'Mr.',strpos($data_student_contact_information_kin_detailes->next_of_kin_title,'Mr.')!==false); }}
                                              <i></i>
                                              Mr
                                              </label>
              </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Mrs.',strpos($data_student_contact_information_kin_detailes->next_of_kin_title,'Mrs.')!==false); }}
                                              <i></i>
                                              Mrs
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Miss.',strpos($data_student_contact_information_kin_detailes->next_of_kin_title,'Miss.')!==false); }}
                                              <i></i>
                                              Miss
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Ms.',strpos($data_student_contact_information_kin_detailes->next_of_kin_title,'Ms.')!==false); }}
                                              <i></i>
                                              Ms
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Dr.',strpos($data_student_contact_information_kin_detailes->next_of_kin_title,'Dr.')!==false); }}
                                              <i></i>
                                              Dr
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Other.',strpos($data_student_contact_information_kin_detailes->next_of_kin_title,'Other.')!==false); }}
                                              <i></i>
                                              Other
                                              </label>
                                           </div>
            </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('next_of_kin_forename', 'Forename', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('next_of_kin_forename', $data_student_contact_information_kin_detailes->next_of_kin_forename,['placeholder'=>'Forename','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('next_of_kin_surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('next_of_kin_surname', $data_student_contact_information_kin_detailes->next_of_kin_surname,['placeholder'=>'Surname','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Telephone</label></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>+&nbsp;&nbsp; <td> {{ Form::text('next_of_kin_telephone', $data_student_contact_information_kin_detailes->next_of_kin_telephone,['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}</td>
  </tr>

</table>
</td>
  </tr>    <tr>
             <td width="30%">{{ Form::label('next_of_kin_email', 'Email ', array('class' => 'control-label'));  }}</td>
             <td>{{ Form::text('next_of_kin_email', $data_student_contact_information_kin_detailes->next_of_kin_email,['placeholder'=>'Email','class'=>'form-control','data-parsley-type'=>'email']); }}</td>
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
    <td> {{ ApplicationCourse::getNameByID($data_student_course_enrolments->course_name); }} ( {{ $data_student_course_enrolments->course_level }} )&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('awarding_body', 'Awarding Body', array('class' => 'control-label'));  }}</td>
    <td> {{ ApplicationAwardingBody::getNameByID($data_student_course_enrolments->awarding_body); }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('intake1', 'Intake', array('class' => 'control-label'));  }}</td>
    <td>{{ StaticYear::getNameByID(ApplicationIntake::getRowByID($data_student_course_enrolments->intake)->year).'-'.StaticMonth::getNameByID(ApplicationIntake::getRowByID($data_student_course_enrolments->intake)->month); }}
           &nbsp;</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label">Study mode</label></td>
    <td> {{ $data_student_course_enrolments->study_mode }}&nbsp;</td>
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
    <td>{{ Form::select('course_name', $course_names,$data_student_course_enrolments->course_name,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"><label class="control-label"></label></td>
    <td>
                                                          <div class="radio-inline i-checks">
                                                                  <label>
                                                                  {{ Form::radio('course_level', 'Top - Up',strpos($data_student_course_enrolments->course_level,'Top - Up')!==false); }}
                                                                  <i></i>
                                                                  Top - Up
                                                                  </label>
              </div>
                                                             <div class="radio-inline i-checks">
                                                                <label>
                                                                {{ Form::radio('course_level', 'Advanced Entry',strpos($data_student_course_enrolments->course_level,'Advanced Entry')!==false); }}
                                                                <i></i>
                                                                Advanced Entry
                                                                </label>
                                                             </div>

            </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('awarding_body', 'Awarding Body', array('class' => 'control-label'));  }}</td>
    <td> {{ Form::select('awarding_body', $awarding_bodies,$data_student_course_enrolments->awarding_body,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('intake1', 'Intake', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::label('intake_year', 'Year', array('class' => 'control-label'));  }}</td>
    <td> {{ Form::select('intake_year', $intake_year,ApplicationIntake::getRowByID($data_student_course_enrolments->intake)->year,['class'=>'chosen-select']);  }}</td>
    <td>{{ Form::label('intake_month', 'Month', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('intake_month', $intake_month,ApplicationIntake::getRowByID($data_student_course_enrolments->intake)->month,['class'=>'chosen-select']);  }}</td>
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
    <td>@if(StudentEnglishLangLevels::lastRecordBySAN($data_student->san)->english_language_level != 'null')
        <?php
        $english_language_level =StudentEnglishLangLevels::lastRecordBySAN($data_student->san)->english_language_level;
        $english_language_level_export = '';
        if(strpos($english_language_level,'CITY & GUILDS')!==false){
        $english_language_level_export = $english_language_level_export.', CITY & GUILDS';
        }
        if(strpos($english_language_level,'IELTS')!==false){
        $english_language_level_export = $english_language_level_export.', IELTS';
        }
        if(strpos($english_language_level,'ESOL')!==false){
        $english_language_level_export = $english_language_level_export.', ESOL';
        }
        if(strpos($english_language_level,'Other')!==false){
        $english_language_level_export = $english_language_level_export.', '.StudentEnglishLangLevels::lastRecordBySAN($data_student->san)->english_language_level_other;
        }
        $english_language_level_export= ltrim ($english_language_level_export, ',');

        //$english_language_level = str_replace('"]]','"\']',$english_language_level);
        ?>
        {{ $english_language_level_export }}
        @endif &nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('english_language_level1', 'Other', array('class' => 'control-label'));  }}</td>
    <td> {{ $data_student_english_lang_levels->english_language_level_other }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('qualification_1', 'Qualification 1', array('class' => 'control-label'));  }}</td>
    <td>@if(intval($data_student_educational_qualifications[0]->qualification) == 1000)
                          @elseif(intval($data_student_educational_qualifications[0]->qualification) == 0)
                          {{ $data_student_educational_qualifications[0]->qualification_other }}
                          @elseif(intval($data_student_educational_qualifications[0]->qualification) > 0)
                          {{ ApplicationEducationalQualification::getNameByID(intval($data_student_educational_qualifications[0]->qualification)) }}
                          @endif
                          </td>
  </tr>
  <tr>
    <td>Other</td>
    <td>{{ $data_student_educational_qualifications[0]->qualification_other }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('institution_1', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[0]->institution }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[0]->qualification_start_date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[0]->qualification_end_date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[0]->qualification_grade }}&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_2', 'Qualification 2', array('class' => 'control-label'));  }}</td>
    <td>@if(intval($data_student_educational_qualifications[1]->qualification) == 1000)
                                  @elseif(intval($data_student_educational_qualifications[1]->qualification) == 0)
                                  {{ $data_student_educational_qualifications[1]->qualification_other }}
                                  @elseif(intval($data_student_educational_qualifications[1]->qualification) > 0)
                                  {{ ApplicationEducationalQualification::getNameByID(intval($data_student_educational_qualifications[1]->qualification)) }}
                                  @endif</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('other', 'Other', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[1]->qualification_other }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('institution_2', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[1]->institution }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[1]->qualification_start_date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[1]->qualification_end_date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[1]->qualification_grade }}&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_3', 'Qualification 3', array('class' => 'control-label'));  }}</td>
    <td>@if(intval($data_student_educational_qualifications[2]->qualification) == 1000)
                                  @elseif(intval($data_student_educational_qualifications[2]->qualification) == 0)
                                  {{ $data_student_educational_qualifications[2]->qualification_other }}
                                  @elseif(intval($data_student_educational_qualifications[2]->qualification) > 0)
                                  {{ ApplicationEducationalQualification::getNameByID(intval($data_student_educational_qualifications[2]->qualification)) }}
                                  @endif</td>
  </tr>
  <tr>
    <td>Other</td>
    <td>{{ $data_student_educational_qualifications[2]->qualification_other }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('institution_3', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[2]->institution }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[2]->qualification_start_date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[2]->qualification_end_date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_educational_qualifications[2]->qualification_grade }}&nbsp;</td>
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
    <td width="5%">{{ Form::checkbox('english_language_level[]', 'CITY & GUILDS',strpos($data_student_english_lang_levels->english_language_level,'CITY & GUILDS')!==false); }}</td>
    <td width="40%">CITY & GUILDS</td>
    <td>{{ Form::checkbox('english_language_level[]', 'IELTS',strpos($data_student_english_lang_levels->english_language_level,'IELTS')!==false); }}</td>
    <td> IELTS</td>
    <td>{{ Form::checkbox('english_language_level[]', 'ESOL',strpos($data_student_english_lang_levels->english_language_level,'ESOL')!==false); }}</td>
    <td> ESOL</td>
    <td>{{ Form::checkbox('english_language_level[]', 'Other',strpos($data_student_english_lang_levels->english_language_level,'Other')!==false); }}</td>
    <td> Other</td>
  </tr>
</table>

    </td>
  </tr>

  <tr>
    <td width="30%">{{ Form::label('english_language_level1', 'Other', array('class' => 'control-label'));  }}</td>
    <td> {{ Form::text('english_language_level_other', $data_student_english_lang_levels->english_language_level_other,['placeholder'=>'','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_1', 'Qualification 1', array('class' => 'control-label'));  }}
            </td>
    <td>{{ Form::select('qualification_1', $education_qualifications,$data_student_educational_qualifications[0]->qualification,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('qualification_other_1', 'Other', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_1_other', $data_student_educational_qualifications[0]->qualification_other,['placeholder'=>'Other Qualifications','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('institution_1', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('institution_1', $data_student_educational_qualifications[0]->institution,['placeholder'=>'Institution','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
     <td>
       <?php
                                                       $qualification_start_date = explode('-',$data_student_educational_qualifications[0]->qualification_start_date)
                                          ?>
       {{ Form::text('qualification_start_date_1', $qualification_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }} </td>
       <td> {{ Form::text('qualification_start_month_1',$qualification_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
       <td>  {{ Form::text('qualification_start_year_1', $qualification_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
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
     <?php
                          $qualification_end_date = explode('-',$data_student_educational_qualifications[0]->qualification_end_date)
             ?>
    {{ Form::text('qualification_end_date_1', $qualification_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>    {{ Form::text('qualification_end_month_1', $qualification_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('qualification_end_year_1', $qualification_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>

   
                                                                  
            </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_grade_1', $data_student_educational_qualifications[0]->qualification_grade,['placeholder'=>'Pass','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_2', 'Qualification 2', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('qualification_2', $education_qualifications,$data_student_educational_qualifications[1]->qualification,['style'=>'width:250px !important','class'=>'chosen-select']);  }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('qualification_other_2', 'Other', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_2_other', $data_student_educational_qualifications[1]->qualification_other,['placeholder'=>'Other Qualifications','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('institution_2', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('institution_2', $data_student_educational_qualifications[1]->institution,['placeholder'=>'Institution','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <?php
                                                    $qualification_start_date = explode('-',$data_student_educational_qualifications[1]->qualification_start_date)
                                       ?>
    {{ Form::text('qualification_start_date_2', $qualification_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }} </td>
    <td> {{ Form::text('qualification_start_month_2',$qualification_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('qualification_start_year_2', $qualification_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
          <?php
                                                $qualification_end_date = explode('-',$data_student_educational_qualifications[1]->qualification_end_date)
                                   ?>
    {{ Form::text('qualification_end_date_2', $qualification_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                    
                                                                   </td>
    <td>  {{ Form::text('qualification_end_month_2', $qualification_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>   {{ Form::text('qualification_end_year_2', $qualification_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td> {{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_grade_2', $data_student_educational_qualifications[1]->qualification_grade,['placeholder'=>'Pass','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_3', 'Qualification 3', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('qualification_3', $education_qualifications,$data_student_educational_qualifications[2]->qualification,['class'=>'chosen-select','style'=>'width:250px !important']);  }}{{ Form::text('qualification_3_other', '',['placeholder'=>'Please specify if other','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('qualification_other_3', 'Other', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_3_other', $data_student_educational_qualifications[2]->qualification_other,['placeholder'=>'Other Qualifications','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('institution_3', 'Institution', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('institution_3', $data_student_educational_qualifications[2]->institution,['placeholder'=>'Institution','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label')); }} </td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>

     <?php
                   $qualification_start_date = explode('-',$data_student_educational_qualifications[2]->qualification_start_date)
      ?>
      {{ Form::text('qualification_start_date_3', $qualification_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                    
                                                                    </td>
    <td>  {{ Form::text('qualification_start_month_3', $qualification_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('qualification_start_year_3', $qualification_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
     <?php
               $qualification_end_date = explode('-',$data_student_educational_qualifications[2]->qualification_end_date)
    ?>
     {{ Form::text('qualification_end_date_3', $qualification_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                     
                                                                    </td>
    <td> {{ Form::text('qualification_end_month_3', $qualification_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('qualification_end_year_3', $qualification_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('qualification_grade_3', $data_student_educational_qualifications[2]->qualification_grade,['placeholder'=>'Pass','class'=>'form-control']); }}</td>
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
    <td>{{ $data_student_work_experiences[0]->occupation }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('company_name_1', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[0]->company_name }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('main_duties_and_responsibilities_1', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[0]->main_duties }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[0]->occupation_start_date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[0]->occupation_end_date }}&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td>{{ Form::label('forename_2', 'Occupation 2', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[1]->occupation }}&nbsp;</td>
  </tr>
  <tr>
    <td>  {{ Form::label('company_name_2', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[1]->company_name }}&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('main_duties_and_responsibilities_2', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[0]->main_duties }}&nbsp;</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[1]->occupation_start_date }}&nbsp;</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[1]->occupation_end_date }}&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td>{{ Form::label('forename_2', 'Occupation 3', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[2]->occupation }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('company_name_3', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[2]->company_name }}&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('main_duties_and_responsibilities_3', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[2]->main_duties }}&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[2]->occupation_start_date }}&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_work_experiences[2]->occupation_end_date }}&nbsp;</td>
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
    <td>{{ Form::text('occupation_1', $data_student_work_experiences[0]->occupation,['placeholder'=>'Occupation','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('company_name_1', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('company_name_1', $data_student_work_experiences[0]->company_name,['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%" valign="top"> {{ Form::label('main_duties_and_responsibilities_1', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::textarea('main_duties_and_responsibilities_1', $data_student_work_experiences[0]->main_duties,['placeholder'=>'','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
        <?php
                            $occupation_start_date = explode('-',$data_student_work_experiences[0]->occupation_start_date)
               ?>
    {{ Form::text('occupation_start_date_1', $occupation_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('occupation_start_month_1', $occupation_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>   {{ Form::text('occupation_start_year_1', $occupation_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%">  {{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
        <?php
                      $occupation_end_date = explode('-',$data_student_work_experiences[0]->occupation_end_date)
         ?>
    {{ Form::text('occupation_end_date_1', $occupation_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_end_month_1', $occupation_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>   {{ Form::text('occupation_end_year_1',$occupation_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%">&nbsp;</td>
    <td><div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_1', 'Yes',$data_student_work_experiences[0]->currently_working); }}
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
    <td>{{ Form::text('occupation_2', $data_student_work_experiences[1]->occupation,['placeholder'=>'Occupation','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td> {{ Form::label('company_name_2', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('company_name_2', $data_student_work_experiences[1]->company_name,['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td valign="top">{{ Form::label('main_duties_and_responsibilities_2', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::textarea('main_duties_and_responsibilities_2',$data_student_work_experiences[1]->main_duties,['placeholder'=>'','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <?php
                  $occupation_start_date = explode('-',$data_student_work_experiences[1]->occupation_start_date)
     ?>
    {{ Form::text('occupation_start_date_2',$occupation_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('occupation_start_month_2',$occupation_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>  {{ Form::text('occupation_start_year_2', $occupation_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
     <?php
                $occupation_end_date = explode('-',$data_student_work_experiences[1]->occupation_end_date)
    ?>
    {{ Form::text('occupation_end_date_2', $occupation_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_end_month_2', $occupation_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_end_year_2', $occupation_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_2', 'Yes',$data_student_work_experiences[1]->currently_working); }}
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
    <td>{{ Form::text('occupation_3', $data_student_work_experiences[2]->occupation,['placeholder'=>'Occupation','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('company_name_3', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('company_name_3', $data_student_work_experiences[2]->company_name,['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td valign="top"> {{ Form::label('main_duties_and_responsibilities_3', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::textarea('main_duties_and_responsibilities_3', $data_student_work_experiences[2]->main_duties,['placeholder'=>'','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>     {{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
                  <?php
                                 $occupation_start_date = explode('-',$data_student_work_experiences[2]->occupation_start_date)
                    ?>
     {{ Form::text('occupation_start_date_3',  $occupation_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('occupation_start_month_3',  $occupation_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_start_year_3',  $occupation_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>        {{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    <?php
                  $occupation_end_date = explode('-',$data_student_work_experiences[2]->occupation_end_date)
     ?>
    {{ Form::text('occupation_end_date_3', $occupation_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('occupation_end_month_3', $occupation_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('occupation_end_year_3', $occupation_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td> <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_3', 'Yes',$data_student_work_experiences[2]->currently_working); }}
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
    <td>{{ $data_student_payment_info_metadata->course_fees }}&nbsp;</td>
  </tr>
  <tr>
    <td> {{ Form::label('date_of_birth', 'Payment Status', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_payment_info_metadata->payment_status }}&nbsp;</td>
  </tr>
  <tr>
    <td>{{ Form::label('total_fee', 'Total fee', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_payment_info_metadata->total_fee }}&nbsp;</td>
  </tr>
  
<tr>
    <td>{{ Form::label('deposit', 'Deposit', array('class' => 'control-label'));  }} </td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%"> {{ Form::label('date_of_birth', 'Deposit', array('class' => 'control-label'));  }} </td>
    <td>{{ $data_studentPaymentInfos[0]->payment_amount }}&nbsp;</td>
  </tr>
  <tr>
    <td width="50%"> {{ Form::label('date_of_birth', 'Date', array('class' => 'control-label'));  }} </td>
    <td>{{ $data_studentPaymentInfos[0]->date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));}}</td>
    <td>{{ $data_studentPaymentInfos[0]->method }}&nbsp;</td>
  </tr>
    </table>

  </td>
  </tr>

     <tr>
    <td>{{ Form::label('forename_3', 'Instalment 1', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">{{ Form::label('date_of_birth', 'Instalment 1', array('class' => 'control-label'));  }}</td>
    <td width="38%">{{ $data_studentPaymentInfos[1]->payment_amount }}&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('date_of_birth', 'Date', array('class' => 'control-label'));  }}</td>
    <td width="38%">{{ $data_studentPaymentInfos[1]->date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentPaymentInfos[1]->method }}&nbsp;</td>
  </tr>
    </table>
</td>
  </tr>
 <tr>
    <td>{{ Form::label('forename_3', 'Instalment 2', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">{{ Form::label('date_of_birth', 'Instalment 2', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentPaymentInfos[2]->payment_amount }}&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('date_of_birth', 'Date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentPaymentInfos[2]->date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentPaymentInfos[2]->method }}&nbsp;</td>
  </tr>
    </table>
</td>
  </tr>

 <tr>
    <td> {{ Form::label('forename_3', 'Instalment 3', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">{{ Form::label('date_of_birth', 'Instalment 3', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentPaymentInfos[3]->payment_amount }}&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('date_of_birth', 'Date', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentPaymentInfos[3]->date }}&nbsp;</td>
  </tr>
  <tr>
    <td width="50%">{{ Form::label('instalment_payment_method_3', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_studentPaymentInfos[3]->method }}&nbsp;</td>
  </tr>
    </table>
</td>
  </tr>

<tr>
    <td> {{ Form::label('late_admin_fee', 'Late admin fee', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_payment_info_metadata->late_admin_fee }}&nbsp;</td>
  </tr>
  <tr>
    <td>{{ Form::label('late_fee', 'Late fee', array('class' => 'control-label'));  }}</td>
    <td>{{ $data_student_payment_info_metadata->late_fee }}&nbsp;</td>
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
    <td>{{ Form::checkbox('course_fees[]', 'Self funded',strpos($data_student_payment_info_metadata->course_fees,'Self funded')!==false); }}</td>
    <td><i></i>Self funded</td>
    <td>{{ Form::checkbox('course_fees[]', 'Sponsored by the Company',strpos($data_student_payment_info_metadata->course_fees,'Sponsored by the Company')!==false); }}</td>
    <td><i></i>Sponsored by the Company</td>
    <td>{{ Form::checkbox('course_fees[]', 'Bank Loan',strpos($data_student_payment_info_metadata->course_fees,'Bank Loan')!==false); }}</td>
    <td><i></i>Bank Loan</td>
  </tr>
</table>

                                        
                                          
                                          
            </td>
  </tr>
  <tr>
    <td width="30%">{{ Form::label('date_of_birth', 'Payment Status', array('class' => 'control-label'));  }}</td>
    <td>   <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::checkbox('payment_status[]', 'Paid in full',strpos($data_student_payment_info_metadata->payment_status,'Paid in full')!==false); }}</td>
    <td>Paid in full</td>
    <td>{{ Form::checkbox('payment_status[]', 'Unpaid',strpos($data_student_payment_info_metadata->payment_status,'Unpaid')!==false); }}</td>
    <td> Unpaid</td>
    <td>{{ Form::checkbox('payment_status[]', 'Deposit paid',strpos($data_student_payment_info_metadata->payment_status,'Deposit paid')!==false); }}</td>
    <td>Deposit paid</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('total_fee', 'Total fee', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('total_fee',$data_student_payment_info_metadata->total_fee,['placeholder'=>'Total fee','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td width="30%"> {{ Form::label('deposit', 'Deposit', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('deposit',  $data_studentPaymentInfos[0]->payment_amount,['placeholder'=>'Deposit','class'=>'form-control']); }}</td>
    <td>{{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
        <?php
                      $studentPaymentInfosDate = explode('-',$data_studentPaymentInfos[0]->date)
         ?>

           {{ Form::text('deposit_date', $studentPaymentInfosDate[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
          
          </td>
        <td> {{ Form::text('deposit_month', $studentPaymentInfosDate[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
        <td>   {{ Form::text('deposit_year', $studentPaymentInfosDate[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
        </tr>
  </table>
</td>
    </tr>
    </table>
</td>
  </tr>
  
  <tr>
    <td width="30%">{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('deposit_payment_method_1', $method_of_payment,$data_studentPaymentInfos[0]->method,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Instalment 1', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>


    {{ Form::text('instalment_1', $data_studentPaymentInfos[1]->payment_amount,['placeholder'=>'Instalment 1','class'=>'form-control']); }}</td>
    <td>{{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><?php
                              $studentPaymentInfosDate = explode('-',$data_studentPaymentInfos[1]->date)
                 ?>
                 {{ Form::text('instalment_1_date', $studentPaymentInfosDate[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
          
          </td>
        <td> {{ Form::text('instalment_1_month', $studentPaymentInfosDate[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
        <td> {{ Form::text('instalment_1_year', $studentPaymentInfosDate[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
        </tr>
  </table>
</td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('instalment_payment_method_1',$method_of_payment,$data_studentPaymentInfos[1]->method,['class'=>'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Instalment 2', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('instalment_2', $data_studentPaymentInfos[2]->payment_amount,['placeholder'=>'Instalment 2','class'=>'form-control']); }}</td>
    <td> {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
         <?php
                  $studentPaymentInfosDate = explode('-',$data_studentPaymentInfos[2]->date)
     ?>
        {{ Form::text('instalment_2_date', $studentPaymentInfosDate[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
          
          </td>
        <td> {{ Form::text('instalment_2_month', $studentPaymentInfosDate[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
        <td>{{ Form::text('instalment_2_year', $studentPaymentInfosDate[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
        </tr>
  </table>
</td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('instalment_payment_method_2', $method_of_payment,$data_studentPaymentInfos[2]->method,['class'=> 'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('forename_3', 'Instalment 3', array('class' => 'control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('instalment_3', $data_studentPaymentInfos[3]->payment_amount,['placeholder'=>'Instalment 3','class'=>'form-control']); }}</td>
    <td>{{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
         <?php
                       $studentPaymentInfosDate = explode('-',$data_studentPaymentInfos[3]->date)
          ?>
         {{ Form::text('instalment_3_date',$studentPaymentInfosDate[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
          
          </td>
        <td>{{ Form::text('instalment_3_month', $studentPaymentInfosDate[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}</td>
        <td>{{ Form::text('instalment_3_year', $studentPaymentInfosDate[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}</td>
        </tr>
  </table>
</td>
    </tr>
</table>
</td>
  </tr>
  <tr>
    <td>{{ Form::label('instalment_payment_method_3', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::select('instalment_payment_method_3', $method_of_payment,$data_studentPaymentInfos[3]->method,['class'=> 'chosen-select col-sm-12']);  }}</td>
  </tr>
  <tr>
    <td colspan="2"><hr width="100%" size="1" noshade="noshade" /></td>
    </tr>
  <tr>
    <td width="30%">{{ Form::label('late_admin_fee', 'Late admin fee', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('late_admin_fee',$data_student_payment_info_metadata->late_admin_fee,['placeholder'=>'Late admin fee','class'=>'form-control']); }}</td>
  </tr>
   <tr>
    <td width="30%">{{ Form::label('late_fee', 'Late fee', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('late_fee', $data_student_payment_info_metadata->late_fee,['placeholder'=>'Late fee','class'=>'form-control']); }}</td>
  </tr>
</table>

                              
         </div>
                           
                           
                           
                           
                           
      </section>
      
      
</div>


</div><div class="row">
         <div class="col-sm-5">
       <section class="panel panel-default">
                                  <header class="panel-heading font-bold">BQu only</header>
                                  <div class="panel-body">
                                  <table>
                                  <tr>
                                  <td width="260">Application received to BQu date </td>
                                  <td></td>
                                  <td> {{ $data_student_bqu_data->application_received_date }}</td>
                                  </tr>
                                  <tr>
                                  <td>Application amendment by</td>
                                  <td></td>
                                  <td>{{ Form::hidden('application_input_by', Sentry::getUser()->id) }}
                                  <?php
                                                $application_input_user = DB::table('student_bqu_data')->select('application_input_by')->where('san','=',$data_student->san)->where('status','=','1')->first();

                                                ?>
                                                 @if($application_input_user != null)
                                                {{ User::getFirstNameByID($application_input_user->application_input_by).' '.User::getLastNameByID($application_input_user->application_input_by) }}
                                 @endif
                                  </td></tr>
                                  <tr>
                                  <td> Supervisor</td>
                                  <td></td>
                                  <td>

                                  <?php
                                                  $applicatin_supervised_user = DB::table('student_bqu_data')->select('application_input_by')->where('san','=',$data_student->san)->where('status','=','2')->first();

                                                  ?>
                                                  @if($applicatin_supervised_user!= null))

                                  @endif
                                   {{ User::getFirstNameByID($data_student_bqu_data->supervisor).' '.User::getLastNameByID($data_student_bqu_data->supervisor) }}</td>
                                  </tr>
                                  <tr>
                                  <td>Applicant verified by BQu date</td>
                                  <td></td>
                                  <td>  {{ $data_student_bqu_data->verified_date }}   </td>
                                  </tr>
                                  <tr>
                                  <td> Status </td>
                                  <td></td>
                                  <td>{{  StaticDataStatus::getNameByID($data_student_bqu_data->status) }}
                                      </td>
                                  </tr>
                                  <tr>
                                                                    <td> Notes </td>
                                                                    <td></td>
                                                                    <td>{{ $data_student_bqu_data->notes }}</td>
                                                                    </tr>
                                  </table>


                                  </div>

                               </section>
                            </div>
           <div class="col-sm-7">
            <section class="panel panel-default">
                                       <header class="panel-heading font-bold">BQu only</header>




<div class="panel-body">
                                  <table>
                                  <tr>
                                  <td width="260">Application received to BQu date </td>
                                  <td></td>
                                  <td><div class="form-inline">
                                    <?php
                                               $application_received_date = explode('-',$data_student_bqu_data->application_received_date)
                                  ?>
                                                {{ Form::text('application_received_to_bqu_date', $application_received_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('application_received_to_bqu_month', $application_received_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('application_received_to_bqu_year', $application_received_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div></td>
                                  </tr>
                                  <tr>
                                  <td>Application input by</td>
                                  <td></td>
                                  <td>{{ Form::hidden('application_input_by', Sentry::getUser()->id) }} {{Sentry::getUser()->first_name.' '.Sentry::getUser()->last_name}}</td>
                                  </tr>
                                  <tr>
                                  <td> Supervisor</td>
                                  <td></td>
                                  <td> <select data-placeholder="Choose a Supervisors" class="chosen-select col-sm-12" id="supervisor" name="supervisor">
@foreach($supervisors as $supervisor)
                                <option value="{{ $supervisor->id }}">{{ $supervisor->first_name.' '.$supervisor->last_name }}</option>
                                @endforeach
                                                                                                             </select>
                                                                                                             </td>
                                  </tr>
                                  <tr>
                                  <td>Applicant verified by BQu date</td>
                                  <td></td>
                                  <td>                    <?php
                                           $applicant_verified_by_bqu_date = explode('-',$data_student_bqu_data->verified_date)
                              ?>
                                           <div class="form-inline"> {{ Form::text('applicant_verified_by_bqu_date', $applicant_verified_by_bqu_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                            {{ Form::text('applicant_verified_by_bqu_month', $applicant_verified_by_bqu_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                            {{ Form::text('applicant_verified_by_bqu_year', $applicant_verified_by_bqu_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
</div>



                                                                                                                            </td>
                                  </tr>
                                  <tr>
                                  <td> Status </td>
                                  <td></td>
                                  <td>{{ Form::hidden('admission_status','3') }}
                                                                             </td>
                                  </tr>
                                  <tr>
                                  <td> Notes </td>
                                  <td></td>
                                  <td>{{ Form::textarea('notes', $data_student_bqu_data->notes,['placeholder'=>'','class'=>'form-control']); }}</td>
                                  </tr>
                                  </table>


                                  </div>



                                    </section>
                              </div>
                              <div class="col-sm-12">
<hr width="100%" size="1" noshade="noshade">
                                  <div class="form-group">
                                                                        <div class="col-sm-5"></div>
                                                                        <div class="col-sm-7">
                                                                           <div class="checkbox i-checks">
                                                                              <label>
                                                                             {{ Form::checkbox('confirm_save', '1',false,array('data-required'=>'true')); }}
                                                                              <i></i>
                                                                              Confirm Save
                                                                              </label>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                       <hr width="100%" size="1" noshade="noshade">
                                                                                                <div class="form-group">
                                                                                                   <label class="col-sm-3 control-label"> </label>
                                                                                                   <div class="col-sm-9">
                                                                                                   {{ Form::submit('Save', array('class' => 'btn btn-s-md btn-primary')) }}
                                                                                                   </div>
                                                                                                </div>
                              </div>
                            </div>
          {{ Form::close() }}
 @stop

















@section('main_menu')

 @stop


 @section('post_css')
 {{ HTML::style('js/chosen/chosen.css'); }}
 @stop

 @section('post_js')
 <script type="text/javascript">

 $(function() {
$('#supervisor').prepend("<option value='1000'>Please Select a Supervisor</option>");
$('#supervisor').trigger("chosen:updated");
  $('#supervisor').val('{{ $data_student_bqu_data->supervisor }}').trigger("chosen:updated");


$('[name="deposit_payment_method_1"]').prepend("<option value='1000'>Please Select an Option</option>").trigger("chosen:updated");
$('[name="deposit_payment_method_1"]').trigger("chosen:updated");
$('[name="deposit_payment_method_1"]').val('{{ $data_studentPaymentInfos[0]->method }}').trigger("chosen:updated");
$('[name="instalment_payment_method_1"]').prepend("<option value='1000'>Please Select an Option</option>").trigger("chosen:updated");
$('[name="instalment_payment_method_1"]').trigger("chosen:updated");
$('[name="instalment_payment_method_1"]').val('{{ $data_studentPaymentInfos[1]->method }}').trigger("chosen:updated");
$('[name="instalment_payment_method_2"]').prepend("<option value='1000'>Please Select an Option</option>").trigger("chosen:updated");
$('[name="instalment_payment_method_2"]').trigger("chosen:updated");
$('[name="instalment_payment_method_2"]').val('{{ $data_studentPaymentInfos[2]->method }}').trigger("chosen:updated");
$('[name="instalment_payment_method_3"]').prepend("<option value='1000'>Please Select an Option</option>").trigger("chosen:updated");
$('[name="instalment_payment_method_3"]').trigger("chosen:updated");
$('[name="instalment_payment_method_3"]').val('{{ $data_studentPaymentInfos[3]->method }}').trigger("chosen:updated");

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
$('[name="agents_laps"]').prepend("<option value='0'>Please Select an Option</option>");
 $('[name="agents_laps"]').trigger("chosen:updated");
  $('[name="agents_laps"]').val('{{ $data_studentSource->agent_lap }}').trigger("chosen:updated");

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

// $('[name="qualification_1_other"]').hide();
// $('[name="agents_laps_other"]').hide();
 //$('[name="admission_managers_other"]').hide();

     $('[name="qualification_1"]').change(function(){
         if($(this).val() == 0){
             $('[name="qualification_1_other"]').show();
         }else{
             $('[name="qualification_1_other"]').hide();
         }
  });



 $('[name="qualification_2"]').append("<option value='0'>Other</option>");
 $('[name="qualification_2"]').trigger("chosen:updated");
 //$('[name="qualification_2_other"]').hide();

     $('[name="qualification_2"]').change(function(){
         if($(this).val() == 0){
             $('[name="qualification_2_other"]').show();
         }else{
             $('[name="qualification_2_other"]').hide();
         }
  });

 $('[name="qualification_3"]').append("<option value='0'>Other</option>");
 $('[name="qualification_3"]').trigger("chosen:updated");
 //$('[name="qualification_3_other"]').hide();

     $('[name="qualification_3"]').change(function(){
         if($(this).val() == 0){
             $('[name="qualification_3_other"]').show();
         }else{
             $('[name="qualification_3_other"]').hide();
         }
  });

   $('#information_source').change(function(){

				$.ajax({
                  url: "{{ url('information_source/dropdown')}}",
                  data: {token: $('[name="_token"]').val(),option: $('#information_source').val()},
                  success: function (data) {console.log('success');
                  $('[name="agent_names"]').empty();

                      var model = $('[name="agents_laps"]');
                        model.empty();
                         model.append("<option value='0'>Please Select an Option</option>");


                        $.each(data, function(index, element) {

                            model.append("<option value='"+ index +"'>" + element + "</option>");
                        });

 model.append("<option value='1000'>Other</option>");

                        $('[name="agents_laps"]').trigger("chosen:updated");
                       },
                          type: "GET"

                });
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


  @section('breadcrumb')
     <li><a href="{{ URL::to('/students') }}">Admissions</a></li>
     <li><a href="{{ URL::to('/students/verify') }}">Amendment Applications</a></li>
     <li class="active">{{ $data_student->san }}</li>
   @stop