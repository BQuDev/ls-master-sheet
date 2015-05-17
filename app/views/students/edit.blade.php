@extends('layouts.main')


@section('content')
<div class="row" style="min-height: 50px;"></div>
<div class="row">
   <div class="col-sm-12">
   </div>
</div>
<div class="row">
   <div class="col-sm-6">

 <section class="panel panel-default">
       <header class="panel-heading font-bold">STUDENT MAIN INFORMATION</header>
       <div class="panel-body">

 <div class="form-inline">
                  {{ Form::label('san', 'Student Application Number (SAN)', array('class' => 'col-sm-6 control-label'));  }}
                  <div class="col-sm-6">{{ $student->san  }}&nbsp;</div>
               </div>

              <div class="form-inline">
                 {{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'col-sm-6 control-label'));  }}
                 <div class="col-sm-6">{{ $student->ls_student_number }}&nbsp;</div>
              </div>


                  <div class="form-inline">
                     {{ Form::label('app_date', 'App Date', array('class' => 'col-sm-6 control-label'));  }}
                     <div class="col-sm-6">
                     {{ $studentSource->app_date_date.'-'.$studentSource->app_date_month.'-'.$studentSource->app_date_year }}&nbsp;
                     </div>
                     </div>
                      <div class="form-inline">
                     {{ Form::label('ams_date', 'AMS Date', array('class' => 'col-sm-6 control-label'));  }}
                     <div class="col-sm-6">
                        {{ $studentSource->ams_date_date.'-'.$studentSource->ams_date_month.'-'.$studentSource->ams_date_year }}&nbsp;
                        </div>
                  </div>



       </div>
  </section>
   </div>
   <!-- Edit -->
   <div class="col-sm-6">
 <section class="panel panel-default">
       <header class="panel-heading font-bold">STUDENT MAIN INFORMATION</header>
       <div class="panel-body">

 <div class="form-inline">
                  {{ Form::label('san', 'Student Application Number (SAN)', array('class' => 'col-sm-6 control-label'));  }}
                  <div class="col-sm-6">{{ Form::text('san',  $student->san ,['placeholder'=>'Student Application Number (SAN)','class'=>'form-control','data-required'=>'true','minlength'=>"5"]); }}</div>
               </div>

              <div class="form-inline">
                 {{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'col-sm-6 control-label'));  }}
                 <div class="col-sm-6">{{ Form::text('ls_student_number', $student->ls_student_number,['placeholder'=>'LS Student Number','class'=>'form-control']); }}</div>
              </div>


                  <div class="form-inline">
                     {{ Form::label('app_date', 'App Date', array('class' => 'col-sm-6 control-label'));  }}
                     <div class="col-sm-6">
                     <div class="form-inline">
                                    {{ Form::text('app_date_date', $studentSource->app_date_date,['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                    {{ Form::text('app_date_month', $studentSource->app_date_month,['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                    {{ Form::text('app_date_year', $studentSource->app_date_year,['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}
                                 </div>
                     </div>
                     </div>
                      <div class="form-inline">
                     {{ Form::label('ams_date', 'AMS Date', array('class' => 'col-sm-6 control-label'));  }}
                     <div class="col-sm-6">
                        <div class="form-inline">
                                       {{ Form::text('ams_date_date', $studentSource->ams_date_date,['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                       {{ Form::text('ams_date_month', $studentSource->ams_date_month,['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                       {{ Form::text('ams_date_year', $studentSource->ams_date_year,['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}
                                    </div>
                        </div>
                  </div>
       </div>
  </section>

   </div>
</div>


<div class="row">
   <div class="col-sm-6">
       <section class="panel panel-default">
                  <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>
                  <div class="panel-body">
                     <div class="form-inline">
                        {{ Form::label('information_source', 'Information Source', array('class' => 'col-sm-6 control-label'));  }}
                        <div class="col-sm-6">
                       {{  DB::table('application_sources')->where('id', $studentSource->information_source)->pluck('name'); }}&nbsp;

                        </div>
                     </div>

 <div class="form-group">
   <div class="form-inline">
                {{ Form::label('admission_manager', 'Admission manager', array('class' => 'col-sm-6 control-label'));  }}
                <div class="col-sm-6">{{  DB::table('application_admission_managers')->where('id', $studentSource->admission_manager)->pluck('name'); }}&nbsp; </div>

                              </div>
                              </div>

 <div class="form-group">
   <div class="form-inline">
                {{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'col-sm-6 control-label'));  }}
                <div class="col-sm-6">@if ($studentSource->admission_manager == 6)
                     {{  DB::table('application_laps')->where('id', $studentSource->admission_manager)->pluck('name'); }}
                @else
                     {{  DB::table('application_agents')->where('id', $studentSource->admission_manager)->pluck('name'); }}
                @endif</div>

                              </div>
                              </div>

                                          </div>
               </section>
   </div>
   <div class="col-sm-6">

       <section class="panel panel-default">
                  <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>
                  <div class="panel-body">
                     <div class="form-inline">
                        {{ Form::label('information_source', 'Information Source', array('class' => 'col-sm-6 control-label'));  }}
                        <div class="col-sm-6">
                        {{ Form::select('information_source', $information_sources,'',['class'=>'chosen-select col-sm-12']);  }}

                        </div>
                     </div>


   <div class="form-inline">
                {{ Form::label('admission_manager', 'Admission manager', array('class' => 'col-sm-6 control-label'));  }}
                <div class="col-sm-6">{{ Form::select('admission_manager',  $admission_managers,'',['class'=>'chosen-select col-sm-12']);  }}</div>

                              </div>
                              <div class="form-inline"><div class="col-sm-6"></div><div class="col-sm-6">{{ Form::text('admission_managers_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>


   <div class="form-inline">
                {{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'col-sm-6 control-label'));  }}
                <div class="col-sm-6">{{ Form::select('agents_laps', $agents_laps,'',['class'=>'chosen-select col-sm-12']);  }}</div>

                              </div>
  <div class="form-inline"><div class="col-sm-6"></div><div class="col-sm-6">{{ Form::text('agents_laps_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</div></div>
                  </div>
               </div></section>
   </div>
</div>

<div class="row">
   <div class="col-sm-6">
       <section class="panel panel-default">
      <header class="panel-heading font-bold">PERSONAL DATA</header>
     <div class="panel-body">
                                   <div class="form-inline">
                                      <label class="col-sm-3 control-label">Title</label>
                                      <div class="col-sm-9">
                                         <div class="radio-inline i-checks">
                                            {{ $student->title }}&nbsp;
                                         </div>
                                      </div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('initials', 'Initials', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="form-group">
                                         <div class="col-sm-2">{{ $student->initials_1 }}&nbsp;</div>

                                         <div class="col-sm-2">{{ $student->initials_2 }}&nbsp;</div>

                                         <div class="col-sm-2">{{ $student->initials_3 }}&nbsp;</div>
     &nbsp;
                                      </div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('forename_1', 'Forename 1', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">{{ $student->forename_1 }}&nbsp;</div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('forename_2', 'Forename 2', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">{{ $student->forename_2 }}&nbsp;</div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('forename_3', 'Forename 3', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">{{ $student->forename_3 }}&nbsp;</div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('surname', 'Surname', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">{{ $student->surname }}&nbsp;</div>
                                   </div>
                                   <div class="form-inline">
                                      <label class="col-sm-3 control-label">Gender</label>
                                      <div class="col-sm-9">
                                         {{ $student->gender }}&nbsp;
                                      </div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('date_of_birth', 'Date of birth', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9"><div class="form-inline">
                                                     {{ $student->date_of_birth_date.'-'.$student->date_of_birth_month.'-'.$student->date_of_birth_year }}&nbsp;
                                                  </div>
                                                  </div>
                                      </div>
                                   <div class="form-inline">
                                      {{ Form::label('nationality', 'Nationality', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">

                                         {{ StaticNationality::getNameByID($student->nationality)  }}&nbsp;
                                      </div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('passport', 'Passport number', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9"> {{ $student->passport  }}&nbsp;</div>
                                   </div>
                                </div>
      </section>
  </div>
   <div class="col-sm-6">
       <section class="panel panel-default">
      <header class="panel-heading font-bold">PERSONAL DATA</header>
      <div class="panel-body">
                              <div class="form-inline">
                                 <label class="col-sm-2 control-label">Title</label>
                                 <div class="col-sm-10">
                                    <div class="radio-inline i-checks">
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
                                    </div>
                                 </div>&nbsp;
                              </div>
                              <div class="form-inline">
                                 {{ Form::label('initials', 'Initials', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="form-group">
                                    <div class="col-sm-2">{{ Form::text('initials_1',  $student->initials_1 ,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</div>

                                    <div class="col-sm-2">{{ Form::text('initials_2', $student->initials_2,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</div>

                                    <div class="col-sm-2">{{ Form::text('initials_3', $student->initials_3,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</div>
&nbsp;
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('forename_1', 'Forename 1', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('forename_1', $student->forename_1,['placeholder'=>'Forename 1','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('forename_2', 'Forename 2', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('forename_2', $student->forename_2,['placeholder'=>'Forename 2','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('forename_3', 'Forename 3', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('forename_3', $student->forename_3,['placeholder'=>'Forename 3','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('surname', 'Surname', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('surname', $student->surname,['placeholder'=>'Surname','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Gender</label>
                                 <div class="col-sm-9">
                                    <div class="radio-inline i-checks">
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
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Date of birth', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9"><div class="form-inline">
                                                {{ Form::text('date_of_birth_date', $student->date_of_birth_date,['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                                {{ Form::text('date_of_birth_month', $student->date_of_birth_month,['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                                {{ Form::text('date_of_birth_year', $student->date_of_birth_year,['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                 </div>
                              <div class="form-group">
                                 {{ Form::label('nationality', 'Nationality', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">

                                    {{ Form::select('nationality', $nationalities,$student->nationality,['class'=>'chosen-select col-sm-12']);  }}
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('passport', 'Passport number', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9"> {{ Form::text('passport', $student->passport,['placeholder'=>'Passport number','class'=>'form-control']); }}</div>
                              </div>
                           </div>
      </section>
  </div>
</div>

<div class="row">
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">CONTACT INFORMATION</header>
           <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Term time</div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>

                      <div class="panel-body">
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Address line 1</label>
                                     <div class="col-sm-9">&nbsp;
                                        {{ $ttStudentContactInformation->address_1  }}
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Address line 2</label>
                                     <div class="col-sm-9">&nbsp;
                                        {{ $ttStudentContactInformation->address_2  }}
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Town/City</label>
                                     <div class="col-sm-9">
                                         {{ $ttStudentContactInformation->city  }}&nbsp;
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Post code</label>
                                     <div class="col-sm-9">
                                        {{ $ttStudentContactInformation->post_code  }}&nbsp;
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Country</label>
                                     <div class="col-sm-9">
                                         {{ $ttStudentContactInformation->country  }}&nbsp;
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Mobile</label>
                                     <div class="col-sm-9">
                                        <div class="form-inline">
                                          +&nbsp;&nbsp;

                                       {{ $ttStudentContactInformation->mobile  }}&nbsp;
                                        </div>
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Landline</label>
                                     <div class="col-sm-9">
                                        <div class="form-inline">
                                        +&nbsp;&nbsp;
                                        {{ $ttStudentContactInformation->landline  }}&nbsp;

                                      </div>
                                     </div>

                                  </div>
                    </div>
                    <!-- Country of origin -->
                    <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Permanent</div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="panel-body">
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Address line 1</label>
                          <div class="col-sm-9">
                              {{ $studentContactInformation->address_1  }}&nbsp;
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Address line 2</label>
                          <div class="col-sm-9">
                          {{ $studentContactInformation->address_2  }}&nbsp;
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Town/City</label>
                          <div class="col-sm-9">
                             {{ $studentContactInformation->city  }}&nbsp;
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Post code</label>
                          <div class="col-sm-9">
                             {{ $studentContactInformation->post_code  }}&nbsp;
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Country</label>
                          <div class="col-sm-9">


                                {{ $studentContactInformation->country  }}&nbsp;

                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Mobile</label>
                          <div class="col-sm-9">
                             <div class="form-inline">
                               + {{ $studentContactInformation->mobile  }}&nbsp;
                             </div>
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Landline</label>
                          <div class="col-sm-9">
                             <div class="form-inline">
                                                 + {{ $studentContactInformation->landline  }}&nbsp;
                                               </div>
                          </div>
                       </div>
                       <div class="form-inline">
                          {{ Form::label('email', 'Email ', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9"> + {{ $studentContactInformationOnline->email  }}&nbsp;</div>

                       </div>
                       <div class="form-inline">
                          {{ Form::label('alternative_email', 'Alternative Email', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">&nbsp;
                          {{ $studentContactInformationOnline->alternative_email  }}
                          </div>
                       </div>&nbsp;
        <div class="line line-dashed b-b line-lg pull-in"></div>


                       <div class="form-inline">
{{ Form::label('forename_3', 'Facebook', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                           {{ $studentContactInformationOnline->facebook  }}&nbsp;
                          </div>
                       </div>

                       <div class="form-inline">
                          {{ Form::label('forename_3', 'LinkedIn', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                                 {{ $studentContactInformationOnline->linkedin  }}&nbsp;</div>
                       </div>
                       <div class="form-inline">
                          {{ Form::label('forename_3', 'Twitter', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                          {{ $studentContactInformationOnline->twitter  }}&nbsp;</div>
                       </div>
                       <div class="form-inline">
                          {{ Form::label('forename_3', 'Other Social', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">{{ $studentContactInformationOnline->other_social  }}&nbsp;</div>
                       </div>
                    </div>
            </section>
     </div>
   <div class="col-sm-6">
       <section class="panel panel-default">
      <header class="panel-heading font-bold">CONTACT INFORMATION</header>
    <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Term time</div>
             <div class="line line-dashed b-b line-lg pull-in"></div>

               <div class="panel-body">
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Address line 1</label>
                              <div class="col-sm-9">
                                 {{ Form::text('tt_address_1', '',['placeholder'=>'Address line 1','class'=>'form-control']); }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Address line 2</label>
                              <div class="col-sm-9">
                                 {{ Form::text('tt_address_2', '',['placeholder'=>'Address line 2','class'=>'form-control']); }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Town/City</label>
                              <div class="col-sm-9">
                                 {{ Form::text('tt_city', '',['placeholder'=>'Town/City','class'=>'form-control']); }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Post code</label>
                              <div class="col-sm-9">
                                 {{ Form::text('tt_post_code', '',['placeholder'=>'Post code','class'=>'form-control']); }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Country</label>
                              <div class="col-sm-9">
                                 {{ Form::select('tt_country', $countries,'',['class'=>'chosen-select col-sm-12']);  }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Mobile</label>
                              <div class="col-sm-9">
                                 <div class="form-inline">
                                   +&nbsp;&nbsp;
                                   {{ Form::text('tt_mobile_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                   {{ Form::text('tt_mobile_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                   {{ Form::text('tt_mobile_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                   {{ Form::text('tt_mobile', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Landline</label>
                              <div class="col-sm-9">
                                 <div class="form-inline">
                                                     +&nbsp;&nbsp;
                                                     {{ Form::text('tt_landline_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}
                                                     {{ Form::text('tt_landline_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}
                                                     {{ Form::text('tt_landline_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}
                                                     {{ Form::text('tt_landline', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}
                                                   </div>
                              </div>

                           </div>
             </div>
             <!-- Country of origin -->
             <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Permanent</div>
             <div class="line line-dashed b-b line-lg pull-in"></div>
             <div class="panel-body">
                <div class="form-group">
                   <label class="col-sm-3 control-label">Address line 1</label>
                   <div class="col-sm-9">
                      {{ Form::text('address_1', '',['placeholder'=>'Address line 1','class'=>'form-control']); }}
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Address line 2</label>
                   <div class="col-sm-9">
                      {{ Form::text('address_2', '',['placeholder'=>'Address line 2','class'=>'form-control']); }}
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Town/City</label>
                   <div class="col-sm-9">
                      {{ Form::text('city', '',['placeholder'=>'Town/City','class'=>'form-control']); }}
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Post code</label>
                   <div class="col-sm-9">
                      {{ Form::text('post_code', '',['placeholder'=>'Post code','class'=>'form-control']); }}
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Country</label>
                   <div class="col-sm-9">

                         {{ Form::select('country', $countries,'',['class'=>'chosen-select col-sm-12']);  }}

                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Mobile</label>
                   <div class="col-sm-9">
                      <div class="form-inline">
                        +&nbsp;&nbsp;
                        {{ Form::text('mobile_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                        {{ Form::text('mobile_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                        {{ Form::text('mobile_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                        {{ Form::text('mobile', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Landline</label>
                   <div class="col-sm-9">
                      <div class="form-inline">
                                          +&nbsp;&nbsp;
                                          {{ Form::text('landline_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                          {{ Form::text('landline_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                          {{ Form::text('landline_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                          {{ Form::text('landline', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}
                                        </div>
                   </div>
                </div>
                <div class="form-group">
                   {{ Form::label('email', 'Email ', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('email', '',['placeholder'=>'Email','class'=>'form-control','data-parsley-type'=>'email']); }}</div>
                </div>
                <div class="form-group">
                   {{ Form::label('alternative_email', 'Alternative Email', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('alternative_email', '',['placeholder'=>'Alternative Email','class'=>'form-control','data-parsley-type'=>'email']); }}</div>
                </div>
 <div class="line line-dashed b-b line-lg pull-in"></div>


                <div class="form-group">

                   <div class="col-sm-9">{{ Form::text('facebook', '',['placeholder'=>'Facebook','class'=>'form-control']); }}</div>
                </div>

                <div class="form-group">
                   {{ Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('linkedin', '',['placeholder'=>'LinkedIn','class'=>'form-control']); }}</div>
                </div>
                <div class="form-group">
                   {{ Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('twitter', '',['placeholder'=>'Twitter','class'=>'form-control']); }}</div>
                </div>
                <div class="form-group">
                   {{ Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('other_social', '',['placeholder'=>'Other','class'=>'form-control']); }}</div>
                </div>
             </div>
     </section>
     </div>
</div>

<div class="row">
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">Next of Kin Details</header>

                      <div class="panel-body">
                  </div>
              </section>
          </div>
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">Next of Kin Details</header>
                   <div class="panel-body">
                                     <div class="form-group">
                                        <label class="col-sm-2 control-label">Title</label>
                                        <div class="col-sm-10">
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
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        {{ Form::label('next_of_kin_forename', 'Forename', array('class' => 'col-sm-3 control-label'));  }}
                                        <div class="col-sm-9">{{ Form::text('next_of_kin_forename', '',['placeholder'=>'Forename','class'=>'form-control']); }}</div>
                                     </div>
                                     <div class="form-group">
                                        {{ Form::label('next_of_kin_surname', 'Surname', array('class' => 'col-sm-3 control-label'));  }}
                                        <div class="col-sm-9">{{ Form::text('next_of_kin_surname', '',['placeholder'=>'Surname','class'=>'form-control']); }}</div>
                                     </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Telephone</label>
                                          <div class="col-sm-9">
                                                         <div class="form-inline">
                                                                             +&nbsp;&nbsp;
                                                                             {{ Form::text('next_of_kin_telephone_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                                                             {{ Form::text('next_of_kin_telephone_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                                                             {{ Form::text('next_of_kin_telephone_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                                                             {{ Form::text('next_of_kin_telephone', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}
                                                                           </div>
                                                      </div>
                                     </div>
                                  </div>
      </section>
</div>
</div>

<div class="row">
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">COURSE DETAILS</header>

                      <div class="panel-body">
                  </div>
              </section>
          </div>
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">COURSE DETAILS</header>
                      <div class="panel-body">
                                              <div class="form-group">
                                                 {{ Form::label('course_name', 'Course Name', array('class' => 'col-sm-3 control-label'));  }}
                                                 <div class="col-sm-9">
                                                      <div class="form-inline">
                                                      {{ Form::select('course_name', $course_names,'',['class'=>'chosen-select col-sm-12']);  }}




                                                 </div>
                                                 </div>
                                              </div>

                                              <div class="form-group">
                                                          <label class="col-sm-3 control-label"></label>
                                                          <div class="col-sm-9">
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

                                                          </div>
                                                       </div>
                                              <div class="form-inline">

                                              </div>
                                              <div class="form-group">
                                                 {{ Form::label('awarding_body', 'Awarding Body', array('class' => 'col-sm-3 control-label'));  }}
                                                 <div class="col-sm-9">

                                                    {{ Form::select('awarding_body', $awarding_bodies,'',['class'=>'chosen-select col-sm-12']);  }}
                                                 </div>
                                              </div>
                                              <div class="form-group">
                                                                      {{ Form::label('intake1', 'Intake', array('class' => 'col-sm-3 control-label'));  }}
                                                                      <div class="col-sm-9">
                                                                         <div class="form-group">
                                                                           <div class="form-inline">
                                                                           <div class="col-sm-4">
                                                                                            {{ Form::label('intake_year', 'Year', array('class' => 'col-sm-1 control-label'));  }}
                                                                                              <div class="col-sm-3">

                                                                                                 {{ Form::select('intake_year', $intake_year,'',['class'=>'chosen-select']);  }}
                                                                                              </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                            {{ Form::label('intake_month', 'Month', array('class' => 'col-sm-3 control-label'));  }}
                                                                                              <div class="col-sm-9">

                                                                                                 {{ Form::select('intake_month', $intake_month,'',['class'=>'chosen-select']);  }}
                                                                                              </div>
                                                                           </div>
                                                                           </div>
                                                                         </div>

                                                                      </div>
                                                                   </div>
                                                                   <div class="form-group">
                                                                      <label class="col-sm-3 control-label">Study mode</label>
                                                                      <div class="col-sm-9">
                                                                      <div class="radio-inline i-checks">
                                                                              <label>
                                                                              {{ Form::radio('study_mode', 'Blended',true); }}
                                                                              <i></i>
                                                                              Blended
                                                                              </label>
                                                                           </div>
                                                                         <!--<div class="radio-inline i-checks">
                                                                            <label>
                                                                            {{ Form::radio('study_mode', 'Online'); }}
                                                                            <i></i>
                                                                            Online
                                                                            </label>
                                                                         </div>
                                                                         <div class="radio-inline i-checks">
                                                                            <label>
                                                                            {{ Form::radio('study_mode', 'Face to Face'); }}
                                                                            <i></i>
                                                                            Face to Face
                                                                            </label>
                                                                         </div>-->

                                                                      </div>
                                           </div>
                                           </div>
      </section>
</div>
</div>
</div>

<div class="row">
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">EDUCATIONAL QUALIFICATIONS</header>

                      <div class="panel-body">
                  </div>
              </section>
          </div>
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">EDUCATIONAL QUALIFICATIONS</header>

                      <div class="panel-body">
                      <div class="form-group">
                                                       {{ Form::label('english_language_level1', 'English language level', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9 ">
                                                          <div class="form-inline">
                                                             <div class="col-sm-5 ">
                                                                <div class="checkbox i-checks">
                                                                   <label>
                                                                   {{ Form::checkbox('english_language_level[]', 'CITY & GUILDS',false); }}
                                                                   <i></i>
                                                                   CITY & GUILDS
                                                                   </label>
                                                                </div>
                                                             </div>
                                                             <div class="col-sm-3 ">
                                                                <div class="checkbox i-checks">
                                                                   <label>
                                                                   {{ Form::checkbox('english_language_level[]', 'IELTS',false); }}
                                                                   <i></i>
                                                                   IELTS
                                                                   </label>
                                                                </div>
                                                             </div>
                                                             <div class="col-sm-3 ">
                                                                <div class="checkbox i-checks">
                                                                   <label>
                                                                   {{ Form::checkbox('english_language_level[]', 'ESOL',false); }}
                                                                   <i></i>
                                                                   ESOL
                                                                   </label>
                                                                </div>
                                                             </div>

                                                          </div>
                                                       </div>
                                                    </div><br>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>



                                                    <div class="form-inline">
                                                       {{ Form::label('qualification_1', 'Qualification 1', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::select('qualification_1', $education_qualifications,'',['class'=>'chosen-select col-sm-12']);  }}</div>
                                                                        <div class="col-sm-4">{{ Form::text('qualification_1_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                                                                     </div>
                                                    <div class="form-inline">
                                                       {{ Form::label('institution_1', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('institution_1', '',['placeholder'=>'Institution','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-3">
                                                        <div class="form-inline">
                                                                      {{ Form::text('qualification_start_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group">
                                                       {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-3"><div class="form-inline">
                                                                      {{ Form::text('qualification_end_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('qualification_grade_1', '',['placeholder'=>'Pass','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>


                                                    <div class="form-group">
                                                       <div class="col-sm-3"></div>
                                                       <div class="col-sm-9">
                                                          <p>
                                                             <a href="#" id="add_more_qualifications" class="btn btn-default btn-sm">Add More Qualifications</a>
                                                          </p>
                                                       </div>
                                                    </div>



                                        <div id="qualification_container_2">
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_2', 'Qualification 2', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-4">{{ Form::select('qualification_2', $education_qualifications,'',['style'=>'width:150px !important','class'=>'chosen-select']);  }}</div>
                                                         <div class="col-sm-4">{{ Form::text('qualification_2_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                                                      </div>
                                                    <div class="form-group">
                                                       {{ Form::label('institution_2', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('institution_2', '',['placeholder'=>'Institution','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-3">
                                                        <div class="form-inline">
                                                                      {{ Form::text('qualification_start_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group">
                                                       {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-3"><div class="form-inline">
                                                                      {{ Form::text('qualification_end_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('qualification_grade_2', '',['placeholder'=>'Pass','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>


                                                    <div class="form-group">
                                                       <div class="col-sm-3"></div>
                                                       <div class="col-sm-9">
                                                          <p>
                                                             <a href="#" id="add_more_qualifications_2" class="btn btn-default btn-sm">Add More Qualifications</a>
                                                          </p>
                                                       </div>
                                                    </div>
                                                 </div>

                                        <div id="qualification_container_3">
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_3', 'Qualification 3', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-4">{{ Form::select('qualification_3', $education_qualifications,'',['class'=>'chosen-select','style'=>'width:150px !important']);  }}</div>
                                                       <div class="col-sm-4">{{ Form::text('qualification_3_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="form-group">
                                                       {{ Form::label('institution_3', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('institution_3', '',['placeholder'=>'Institution','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-3">
                                                        <div class="form-inline">
                                                                      {{ Form::text('qualification_start_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group">
                                                       {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-3"><div class="form-inline">
                                                                      {{ Form::text('qualification_end_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('qualification_grade_3', '',['placeholder'=>'Pass','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>



                                                 </div>
                  </div>
      </section>
</div>
</div>

<div class="row">
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">WORK EXPERIENCE</header>

                      <div class="panel-body">
                  </div>
              </section>
          </div>
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">WORK EXPERIENCE</header>

                      <div class="panel-body">
                  </div>
      </section>
</div>
</div>

<div class="row">
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">PAYMENT INFORMATION</header>

                      <div class="panel-body">
                  </div>
              </section>
          </div>
   <div class="col-sm-6">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">PAYMENT INFORMATION</header>

                      <div class="panel-body">
                  </div>
      </section>
</div>
</div>
 @stop

















@section('main_menu')
 <li>
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