@extends('layouts.main')


@section('content')


<div class="row" style="min-height: 50px;"></div>
<div class="row">
   <div class="col-sm-12">
      {{ Form::open(array('url' =>URL::to("/").'/students',  'class'=>'form-horizontal','method' => 'post','data-validate'=>'parsley')) }}
<div class="form-group">
         {{ Form::label('san', 'Student Application Number (SAN)', array('class' => 'col-sm-3 control-label'));  }}
         <div class="col-sm-9">{{ Form::text('san', $data_student->san ,['placeholder'=>'Student Application Number (SAN)','class'=>'form-control','data-required'=>'true','minlength'=>"5"]); }} </div>
      </div>

      <div class="form-group">
         {{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'col-sm-3 control-label'));  }}
         <div class="col-sm-9">{{ Form::text('ls_student_number', $data_student->ls_student_number,['placeholder'=>'LS Student Number','class'=>'form-control']); }}</div>
      </div>
<div class="form-group">
         <div class="form-inline">
            {{ Form::label('app_date', 'App Date', array('class' => 'col-sm-3 control-label'));  }}
            <div class="col-sm-3">
            <?php
                $app_date = explode('-',$data_studentSource->app_date)
            ?>
               {{ Form::text('app_date_date', $app_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
               {{ Form::text('app_date_month', $app_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
               {{ Form::text('app_date_year', $app_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}
            </div>
            {{ Form::label('ams_date', 'AMS Date', array('class' => 'col-sm-2 control-label'));  }}
            <div class="col-sm-3">
            <?php
                $ams_date = explode('-',$data_studentSource->ams_date)
            ?>
               {{ Form::text('ams_date_date', $ams_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
               {{ Form::text('ams_date_month', $ams_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
               {{ Form::text('ams_date_year',$ams_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}
            </div>
         </div>
      </div>

            <section class="panel panel-default">
               <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>
               <div class="panel-body">
                  <div class="form-group">
                     {{ Form::label('information_source', 'Information Source', array('class' => 'col-sm-3 control-label'));  }}
                     <div class="col-sm-9">
                     {{ Form::select('information_source', $information_sources,$data_studentSource->source,['class'=>'chosen-select col-sm-4']);  }}


                     </div>
                  </div>


<div class="form-group">
             {{ Form::label('admission_manager', 'Admission manager', array('class' => 'col-sm-3 control-label'));  }}
             <div class="col-sm-4">{{ Form::select('admission_manager',  $admission_managers,$data_studentSource->admission_manager,['class'=>'chosen-select','style'=>'width:259px !important']);  }}</div>
                              <div class="col-sm-4">{{ Form::text('admission_managers_other', $data_studentSource->admission_managers_other,['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                           </div>


<div class="form-group">
             {{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'col-sm-3 control-label'));  }}
             <div class="col-sm-4">{{ Form::select('agents_laps', $agents_laps,$data_studentSource->agent_lap,['class'=>'chosen-select','style'=>'width:259px !important']);  }}</div>
                              <div class="col-sm-4">{{ Form::text('agents_laps_other', $data_studentSource->agents_laps_other,['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                           </div>

               </div>
            </section>
               <section class="panel panel-default">
                     <header class="panel-heading font-bold">PERSONAL DATA</header>
                     <div class="panel-body">
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Title</label>
                           <div class="col-sm-9">
                              <div class="radio-inline i-checks">
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
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           {{ Form::label('initials', 'Initials', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="form-inline">
                              <div class="col-sm-1">{{ Form::text('initials_1',  $data_student->initials_1,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</div>

                              <div class="col-sm-1">{{ Form::text('initials_2', $data_student->initials_2,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</div>

                              <div class="col-sm-1">{{ Form::text('initials_3',$data_student->initials_3,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</div>

                           </div>
                        </div>
                        <div class="form-group">
                           {{ Form::label('forename_1', 'Forename 1', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="col-sm-9">{{ Form::text('forename_1',$data_student->forename_1,['placeholder'=>'Forename 1','class'=>'form-control']); }}</div>
                        </div>
                        <div class="form-group">
                           {{ Form::label('forename_2', 'Forename 2', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="col-sm-9">{{ Form::text('forename_2', $data_student->forename_2,['placeholder'=>'Forename 2','class'=>'form-control']); }}</div>
                        </div>
                        <div class="form-group">
                           {{ Form::label('forename_3', 'Forename 3', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="col-sm-9">{{ Form::text('forename_3', $data_student->forename_3,['placeholder'=>'Forename 3','class'=>'form-control']); }}</div>
                        </div>
                        <div class="form-group">
                           {{ Form::label('surname', 'Surname', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="col-sm-9">{{ Form::text('surname', $data_student->surname,['placeholder'=>'Surname','class'=>'form-control']); }}</div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Gender</label>
                           <div class="col-sm-9">
                              <div class="radio-inline i-checks">
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
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           {{ Form::label('date_of_birth', 'Date of birth', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="col-sm-3"><div class="form-inline">
                            <?php
                               $date_of_birth = explode('-',$data_student->date_of_birth);
                           ?>
                                          {{ Form::text('date_of_birth_date', $date_of_birth[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                          {{ Form::text('date_of_birth_month', $date_of_birth[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                          {{ Form::text('date_of_birth_year',$date_of_birth[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}
                                       </div>
                                       </div>
                           </div>
                        <div class="form-group">
                           {{ Form::label('nationality', 'Nationality', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="col-sm-9">

                              {{ Form::select('nationality', $nationalities,$data_student->nationality,['class'=>'chosen-select col-sm-4']);  }}
                           </div>
                        </div>
                        <div class="form-group">
                           {{ Form::label('passport', 'Passport number', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="col-sm-9"> {{ Form::text('passport', $data_student->passport,['placeholder'=>'Passport number','class'=>'form-control']); }}</div>
                        </div>
                     </div>
                  </section>


      <section class="panel panel-default">
         <header class="panel-heading font-bold">CONTACT INFORMATION</header>
         <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Term time</div>
         <div class="line line-dashed b-b line-lg pull-in"></div>

           <div class="panel-body">
                       <div class="form-group">
                          <label class="col-sm-1 control-label">Address</label>
                          <label class="col-sm-2 control-label">Address line 1</label>
                          <div class="col-sm-9">
                             {{ Form::text('tt_address_1', $data_ttStudentContactInformation->address_1,['placeholder'=>'Address line 1','class'=>'form-control']); }}
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-sm-1 control-label"></label>
                          <label class="col-sm-2 control-label">Address line 2</label>
                          <div class="col-sm-9">
                             {{ Form::text('tt_address_2',$data_ttStudentContactInformation->address_2,['placeholder'=>'Address line 2','class'=>'form-control']); }}
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-sm-1 control-label"></label>
                          <label class="col-sm-2 control-label">Town/City</label>
                          <div class="col-sm-9">
                             {{ Form::text('tt_city', $data_ttStudentContactInformation->city,['placeholder'=>'Town/City','class'=>'form-control']); }}
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-sm-1 control-label"></label>
                          <label class="col-sm-2 control-label">Post code</label>
                          <div class="col-sm-9">
                             {{ Form::text('tt_post_code',$data_ttStudentContactInformation->post_code,['placeholder'=>'Post code','class'=>'form-control']); }}
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-sm-1 control-label"></label>
                          <label class="col-sm-2 control-label">Country</label>
                          <div class="col-sm-9">
                             {{ Form::select('tt_country', $countries,$data_ttStudentContactInformation->country,['class'=>'chosen-select col-sm-4']);  }}
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-sm-1 control-label">Telephone</label>
                          <label class="col-sm-2 control-label">Mobile</label>
                          <div class="col-sm-9">
                             <div class="form-inline">

                               +&nbsp;&nbsp;
                               {{ Form::text('tt_mobile', $data_ttStudentContactInformation->mobile,['placeholder'=>'','class'=>'form-control','style'=>'width:350px !important','data-parsley-type'=>'digits']); }}
                             </div>
                          </div>
                       </div>
                       <div class="form-group">
                          <label class="col-sm-1 control-label"></label>
                          <label class="col-sm-2 control-label">Landline</label>
                          <div class="col-sm-9">
                             <div class="form-inline">
                                                 +&nbsp;&nbsp;
                                                   {{ Form::text('tt_landline',$data_ttStudentContactInformation->landline,['placeholder'=>'','class'=>'form-control','style'=>'width:350px !important','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}
                                               </div>
                          </div>

                       </div>
         </div>
         <!-- Country of origin -->
         <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Permanent</div>
         <div class="line line-dashed b-b line-lg pull-in"></div>
         <div class="panel-body">
            <div class="form-group">
               <label class="col-sm-1 control-label">Address</label>
               <label class="col-sm-2 control-label">Address line 1</label>
               <div class="col-sm-9">
                  {{ Form::text('address_1', $data_studentContactInformation->address_1,['placeholder'=>'Address line 1','class'=>'form-control']); }}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Address line 2</label>
               <div class="col-sm-9">
                  {{ Form::text('address_2', $data_studentContactInformation->address_2,['placeholder'=>'Address line 2','class'=>'form-control']); }}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Town/City</label>
               <div class="col-sm-9">
                  {{ Form::text('city', $data_studentContactInformation->city,['placeholder'=>'Town/City','class'=>'form-control']); }}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Post code</label>
               <div class="col-sm-9">
                  {{ Form::text('post_code', $data_studentContactInformation->post_code,['placeholder'=>'Post code','class'=>'form-control']); }}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Country</label>
               <div class="col-sm-9">

                     {{ Form::select('country', $countries,$data_studentContactInformation->country,['class'=>'chosen-select col-sm-4']);  }}

               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label">Telephone</label>
               <label class="col-sm-2 control-label">Mobile</label>
               <div class="col-sm-9">
                  <div class="form-inline">

                    +&nbsp;&nbsp;
                    {{ Form::text('mobile', $data_studentContactInformation->mobile,['placeholder'=>'','class'=>'form-control','style'=>'width:350px !important','data-parsley-type'=>'digits']); }}
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Landline</label>
               <div class="col-sm-9">
                  <div class="form-inline">
                                      +&nbsp;&nbsp;
                                      {{ Form::text('landline', $data_studentContactInformation->landline,['placeholder'=>'','class'=>'form-control','style'=>'width:350px !important','data-parsley-type'=>'digits']); }}
                                    </div>
               </div>
            </div>
            <div class="form-group">
               {{ Form::label('email', 'Email ', array('class' => 'col-sm-3 control-label'));  }}
               <div class="col-sm-9">{{ Form::text('email', $data_studentContactInformationOnline->email,['placeholder'=>'Email','class'=>'form-control','data-parsley-type'=>'email']); }}</div>
            </div>
            <div class="form-group">
               {{ Form::label('alternative_email', 'Alternative Email', array('class' => 'col-sm-3 control-label'));  }}
               <div class="col-sm-9">{{ Form::text('alternative_email', $data_studentContactInformationOnline->alternative_email,['placeholder'=>'Alternative Email','class'=>'form-control','data-parsley-type'=>'email']); }}</div>
            </div>
            <div class="form-group">
               <div class="line line-dashed b-b line-lg pull-in"></div>
               {{ Form::label('forename_3', 'Social Accounts', array('class' => 'col-sm-3 control-label'));  }}
               <div class="col-sm-9">{{ Form::text('facebook',$data_studentContactInformationOnline->facebook,['placeholder'=>'Facebook','class'=>'form-control']); }}</div>
            </div>
            <div class="form-group">
               {{ Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  }}
               <div class="col-sm-9">{{ Form::text('linkedin', $data_studentContactInformationOnline->linkedin,['placeholder'=>'LinkedIn','class'=>'form-control']); }}</div>
            </div>
            <div class="form-group">
               {{ Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  }}
               <div class="col-sm-9">{{ Form::text('twitter', $data_studentContactInformationOnline->twitter,['placeholder'=>'Twitter','class'=>'form-control']); }}</div>
            </div>
            <div class="form-group">
               {{ Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  }}
               <div class="col-sm-9">{{ Form::text('other_social', $data_studentContactInformationOnline->other_social,['placeholder'=>'Other','class'=>'form-control']); }}</div>
            </div>
         </div>
         <div class="line line-dashed b-b line-lg pull-in"></div>
      </section>

      <section class="panel panel-default">
               <header class="panel-heading font-bold">Next of Kin Details</header>
               <div class="panel-body">
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Title</label>
                     <div class="col-sm-9">
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
                     </div>
                  </div>
                  <div class="form-group">
                     {{ Form::label('next_of_kin_forename', 'Forename', array('class' => 'col-sm-3 control-label'));  }}
                     <div class="col-sm-9">{{ Form::text('next_of_kin_forename', $data_student_contact_information_kin_detailes->next_of_kin_forename,['placeholder'=>'Forename','class'=>'form-control']); }}</div>
                  </div>
                  <div class="form-group">
                     {{ Form::label('next_of_kin_surname', 'Surname', array('class' => 'col-sm-3 control-label'));  }}
                     <div class="col-sm-9">{{ Form::text('next_of_kin_surname', $data_student_contact_information_kin_detailes->next_of_kin_surname,['placeholder'=>'Surname','class'=>'form-control']); }}</div>
                  </div>
                  <div class="form-group">
                     <label class="col-sm-3 control-label">Telephone</label>
                       <div class="col-sm-9">
                                      <div class="form-inline">
                                                          +&nbsp;&nbsp;
                                                           {{ Form::text('next_of_kin_telephone', $data_student_contact_information_kin_detailes->next_of_kin_telephone ,['placeholder'=>'','class'=>'form-control','style'=>'width:350px !important','data-parsley-type'=>'digits']); }}
                                                        </div>
                                   </div>
                  </div>
               </div>
               <div class="form-group">
                  {{ Form::label('next_of_kin_email', 'Email ', array('class' => 'col-sm-3 control-label'));  }}
                  <div class="col-sm-9">{{ Form::text('next_of_kin_email', $data_student_contact_information_kin_detailes->next_of_kin_email,['placeholder'=>'Email','class'=>'form-control','data-parsley-type'=>'email']); }}</div>
               </div>
            </section>

            <section class="panel panel-default">
                     <header class="panel-heading font-bold">COURSE DETAILS</header>
                     <div class="panel-body">
                        <div class="form-group">
                           {{ Form::label('course_name', 'Course Name', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="col-sm-9">
                                <div class="form-inline">
                                {{ Form::select('course_name', $course_names,$data_student_course_enrolments->course_name,['class'=>'chosen-select col-sm-4']);  }}




                           </div>
                           </div>
                        </div>

                        <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-9">
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

                                    </div>
                                 </div>
                        <div class="form-inline">

                        </div>
                        <div class="form-group">
                           {{ Form::label('awarding_body', 'Awarding Body', array('class' => 'col-sm-3 control-label'));  }}
                           <div class="col-sm-9">

                              {{ Form::select('awarding_body', $awarding_bodies,$data_student_course_enrolments->awarding_body,['class'=>'chosen-select col-sm-4']);  }}
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        {{ Form::label('intake1', 'Intake', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                           <div class="form-group">
                             <div class="form-inline">
                             <div class="col-sm-3">
                                              {{ Form::label('intake_year', 'Year', array('class' => 'col-sm-3 control-label'));  }}
                                                <div class="col-sm-2">

                                                   {{ Form::select('intake_year', $intake_year,ApplicationIntake::getRowByID($data_student_course_enrolments->intake)->year,['class'=>'chosen-select','style'=>'width:150px !important']);  }}
                                                </div>
                             </div>
                             <div class="col-sm-4">
                                              {{ Form::label('intake_month', 'Month', array('class' => 'col-sm-3 control-label'));  }}
                                                <div class="col-sm-9">

                                                   {{ Form::select('intake_month', $intake_month,ApplicationIntake::getRowByID($data_student_course_enrolments->intake)->month,['class'=>'chosen-select','style'=>'width:150px !important']);  }}
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
                  </section>
                  <section class="panel panel-default">
                           <header class="panel-heading font-bold">EDUCATIONAL QUALIFICATIONS</header>
                           <div class="panel-body">
                              <div class="form-group">
                                 {{ Form::label('english_language_level1', 'English language level', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9 ">
                                    <div class="form-inline">
                                       <div class="col-sm-3 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('english_language_level[]', 'CITY & GUILDS',strpos($data_student_english_lang_levels->english_language_level,'CITY & GUILDS')!==false); }}
                                             <i></i>
                                             CITY & GUILDS
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-2 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('english_language_level[]', 'IELTS',strpos($data_student_english_lang_levels->english_language_level,'IELTS')!==false); }}
                                             <i></i>
                                             IELTS
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-2 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('english_language_level[]', 'ESOL',strpos($data_student_english_lang_levels->english_language_level,'ESOL')!==false); }}
                                             <i></i>
                                             ESOL
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-5">
                                       <div class="form-inline">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('english_language_level[]', 'Other',strpos($data_student_english_lang_levels->english_language_level,'Other')!==false); }}
                                             <i></i>
                                             Other
                                             </label>
                                          </div>
                                          {{ Form::text('english_language_level_other', $data_student_english_lang_levels->english_language_level_other,['placeholder'=>'','class'=>'form-control']); }}
                                       </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>



                              <div class="form-group">
                                 {{ Form::label('qualification_1', 'Qualification 1', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-4">{{ Form::select('qualification_1', $education_qualifications,$data_student_educational_qualifications[0]->qualification,['class'=>'chosen-select','style'=>'width:350px !important']);  }}</div>
                                                  <div class="col-sm-4">{{ Form::text('qualification_1_other', $data_student_educational_qualifications[0]->qualification_other,['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                                               </div>
                              <div class="form-group">
                                 {{ Form::label('institution_1', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('institution_1', $data_student_educational_qualifications[0]->institution,['placeholder'=>'Institution','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3">
                                  <div class="form-inline">
                                   <?php
                                                  $qualification_start_date = explode('-',$data_student_educational_qualifications[0]->qualification_start_date)
                                     ?>
                                                {{ Form::text('qualification_start_date_1', $qualification_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_start_month_1', $qualification_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_start_year_1', $qualification_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3"><div class="form-inline">
 <?php
                                                  $qualification_end_date = explode('-',$data_student_educational_qualifications[0]->qualification_end_date)
                                     ?>
                                                {{ Form::text('qualification_end_date_1', $qualification_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_end_month_1', $qualification_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_end_year_1', $qualification_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('qualification_grade_1',$data_student_educational_qualifications[0]->qualification_grade,['placeholder'=>'Pass','class'=>'form-control']); }}</div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>






                  <div id="qualification_container_2">
                              <div class="form-group">
                                 {{ Form::label('qualification_2', 'Qualification 2', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-4">{{ Form::select('qualification_2', $education_qualifications,'',['style'=>'width:350px !important','class'=>'chosen-select']);  }}</div>
                                   <div class="col-sm-4">{{ Form::text('qualification_2_other', $data_student_educational_qualifications[1]->qualification_other,['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                                </div>
                              <div class="form-group">
                                 {{ Form::label('institution_2', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('institution_2', $data_student_educational_qualifications[1]->institution,['placeholder'=>'Institution','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3">
                                  <div class="form-inline">
                                  <?php
                                                $qualification_start_date = explode('-',$data_student_educational_qualifications[1]->qualification_start_date)
                                   ?>
                                                {{ Form::text('qualification_start_date_2', $qualification_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_start_month_2', $qualification_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_start_year_2',$qualification_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3"><div class="form-inline">
                                  <?php
                                            $qualification_end_date = explode('-',$data_student_educational_qualifications[1]->qualification_end_date)
                               ?>

                                                {{ Form::text('qualification_end_date_2', $qualification_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_end_month_2', $qualification_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_end_year_2', $qualification_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('qualification_grade_2', $data_student_educational_qualifications[1]->qualification_grade,['placeholder'=>'Pass','class'=>'form-control']); }}</div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>



                           </div>

                  <div id="qualification_container_3">
                              <div class="form-group">
                                 {{ Form::label('qualification_3', 'Qualification 3', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-4">{{ Form::select('qualification_3', $education_qualifications,'',['class'=>'chosen-select','style'=>'width:350px !important']);  }}</div>
                                 <div class="col-sm-4">{{ Form::text('qualification_3_other', $data_student_educational_qualifications[2]->qualification_other,['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('institution_3', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('institution_3', $data_student_educational_qualifications[2]->institution,['placeholder'=>'Institution','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3">
                                  <div class="form-inline">
                                   <?php
                                              $qualification_start_date = explode('-',$data_student_educational_qualifications[2]->qualification_start_date)
                                 ?>
                                                {{ Form::text('qualification_start_date_3', $qualification_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_start_month_3', $qualification_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_start_year_3', $qualification_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3"><div class="form-inline">
                                    <?php
                                              $qualification_end_date = explode('-',$data_student_educational_qualifications[2]->qualification_end_date)
                                 ?>
                                                {{ Form::text('qualification_end_date_3', $qualification_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_end_month_3',$qualification_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('qualification_end_year_3', $qualification_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('qualification_grade_3',  $data_student_educational_qualifications[2]->qualification_grade,['placeholder'=>'Pass','class'=>'form-control']); }}</div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>



                           </div>

                  </div>
                        </section>
                        <section class="panel panel-default">
                           <header class="panel-heading font-bold">WORK EXPERIENCE</header>
                           <div class="panel-body">

                           <div id="occupation_container_1">

                              <div class="form-group">
                                 {{ Form::label('occupation_1', 'Occupation 1', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('occupation_1', $data_student_work_experiences[0]->occupation,['placeholder'=>'Occupation','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('company_name_1', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('company_name_1',  $data_student_work_experiences[0]->company_name,['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('main_duties_and_responsibilities_1', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::textarea('main_duties_and_responsibilities_1', $data_student_work_experiences[0]->main_duties,['placeholder'=>'','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3"><div class="form-inline">
                                  <?php
                                                $occupation_start_date = explode('-',$data_student_work_experiences[0]->occupation_start_date)
                                   ?>
                                                {{ Form::text('occupation_start_date_1', $occupation_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_month_1', $occupation_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_year_1', $occupation_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3"><div class="form-inline">
                                  <?php
                                              $occupation_end_date = explode('-',$data_student_work_experiences[0]->occupation_end_date)
                                 ?>
                                                {{ Form::text('occupation_end_date_1', $occupation_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_month_1', $occupation_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_year_1',$occupation_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_1', 'Yes',$data_student_work_experiences[0]->currently_working); }}
                                       <i></i>
                                       Currently working
                                       </label>
                                    </div>
                                 </div>
                              </div>

                              </div>

                           <div id="occupation_container_2">
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                                 {{ Form::label('forename_2', 'Occupation 2', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('occupation_2', $data_student_work_experiences[1]->occupation,['placeholder'=>'Occupation','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('company_name_2', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('company_name_2', $data_student_work_experiences[1]->company_name,['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('main_duties_and_responsibilities_2', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::textarea('main_duties_and_responsibilities_2',$data_student_work_experiences[1]->main_duties,['placeholder'=>'','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3"><div class="form-inline">
                                  <?php
                                              $occupation_start_date = explode('-',$data_student_work_experiences[1]->occupation_start_date)
                                 ?>
                                                {{ Form::text('occupation_start_date_2', $occupation_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_month_2', $occupation_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_year_2', $occupation_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3"><div class="form-inline">
                                  <?php
                                                $occupation_end_date = explode('-',$data_student_work_experiences[1]->occupation_end_date)
                                   ?>
                                                {{ Form::text('occupation_end_date_2', $occupation_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_month_2', $occupation_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_year_2', $occupation_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_2', 'Yes',$data_student_work_experiences[1]->currently_working); }}
                                       <i></i>
                                       Currently working
                                       </label>
                                    </div>
                                 </div>
                              </div>

                              </div>


                           <div id="occupation_container_3">
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                                 {{ Form::label('forename_2', 'Occupation 3', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('occupation_3', $data_student_work_experiences[2]->occupation,['placeholder'=>'Occupation','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('company_name_3', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('company_name_3',$data_student_work_experiences[2]->company_name,['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('main_duties_and_responsibilities_3', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::textarea('main_duties_and_responsibilities_3',$data_student_work_experiences[2]->main_duties,['placeholder'=>'','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3"><div class="form-inline">
                                           <?php
                                                        $occupation_start_date = explode('-',$data_student_work_experiences[2]->occupation_start_date)
                                           ?>
                                                {{ Form::text('occupation_start_date_3', $occupation_start_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_month_3',  $occupation_start_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_year_3',  $occupation_start_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-3"><div class="form-inline">
                                   <?php
                                                  $occupation_end_date = explode('-',$data_student_work_experiences[2]->occupation_end_date)
                                     ?>
                                                {{ Form::text('occupation_end_date_3', $occupation_end_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_month_3', $occupation_end_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_year_3', $occupation_end_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_3', 'Yes',$data_student_work_experiences[2]->currently_working); }}
                                       <i></i>
                                       Currently working
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              </div>





                           </div>
                        </section>
                        <section class="panel panel-default">
                           <header class="panel-heading font-bold">PAYMENT INFORMATION</header>
                           <div class="panel-body">
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Course fees', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9 ">
                                    <div class="form-inline">
                                       <div class="col-sm-2 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('course_fees[]', 'Self funded',strpos($data_student_payment_info_metadata->course_fees,'Self funded')!==false); }}
                                             <i></i>
                                             Self funded
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('course_fees[]', 'Sponsored by the Company',strpos($data_student_payment_info_metadata->course_fees,'Sponsored by the Company')!==false); }}
                                             <i></i>
                                             Sponsored by the Company
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-2 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('course_fees[]', 'Bank Loan',strpos($data_student_payment_info_metadata->course_fees,'Bank Loan')!==false); }}
                                             <i></i>
                                             Bank Loan
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Payment Status', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9 ">
                                    <div class="form-inline">
                                       <div class="col-sm-2 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('payment_status[]', 'Paid in full',strpos($data_student_payment_info_metadata->payment_status,'Paid in full')!==false); }}
                                             <i></i>
                                             Paid in full
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-2 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('payment_status[]', 'Unpaid',strpos($data_student_payment_info_metadata->payment_status,'Unpaid')!==false); }}
                                             <i></i>
                                             Unpaid
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-2 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('payment_status[]', 'Deposit paid',strpos($data_student_payment_info_metadata->payment_status,'Deposit paid')!==false); }}
                                             <i></i>
                                             Deposit paid
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('total_fee', 'Total fee', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('total_fee', $data_student_payment_info_metadata->total_fee,['placeholder'=>'Total fee','class'=>'form-control']); }}</div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                                 <div class="form-inline">
                                    {{ Form::label('deposit', 'Deposit', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-2">{{ Form::text('deposit', $data_studentPaymentInfos[0]->payment_amount,['placeholder'=>'Deposit','class'=>'form-control']); }}</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-2"><div class="form-inline">
                                     <?php
                                                  $studentPaymentInfosDate = explode('-',$data_studentPaymentInfos[0]->date)
                                     ?>
                                      {{ Form::text('deposit_date', $studentPaymentInfosDate[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                      {{ Form::text('deposit_month', $studentPaymentInfosDate[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                      {{ Form::text('deposit_year', $studentPaymentInfosDate[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                   </div>
                                   </div>{{ Form::label('nationality', 'Method of payment', array('class' => 'col-sm-2 control-label'));  }}
                                    <div class="col-sm-2">

                                       {{ Form::select('deposit_payment_method_1', $method_of_payment,$data_studentPaymentInfos[0]->method,['class'=>'chosen-select col-sm-12']);  }}
                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="form-inline">
                                    {{ Form::label('forename_3', 'Instalment 1', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-2">{{ Form::text('instalment_1',  $data_studentPaymentInfos[1]->payment_amount,['placeholder'=>'Instalment 1','class'=>'form-control']); }}</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-2"><div class="form-inline">
                                                                <?php
                                                                              $studentPaymentInfosDate = explode('-',$data_studentPaymentInfos[1]->date)
                                                                 ?>
                                                                  {{ Form::text('instalment_1_date', $studentPaymentInfosDate[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_1_month',  $studentPaymentInfosDate[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_1_year',  $studentPaymentInfosDate[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                               </div>
                                                               </div>{{ Form::label('nationality', 'Method of payment', array('class' => 'col-sm-2 control-label'));  }}
                                    <div class="col-sm-2">
                                       {{ Form::select('instalment_payment_method_1', $method_of_payment,$data_studentPaymentInfos[1]->method,['class'=>'chosen-select col-sm-12']);  }}

                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="form-inline">
                                    {{ Form::label('forename_3', 'Instalment 2', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-2">{{ Form::text('instalment_2',  $data_studentPaymentInfos[2]->payment_amount,['placeholder'=>'Instalment 2','class'=>'form-control']); }}</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-2"><div class="form-inline">
                                         <?php
                                                      $studentPaymentInfosDate = explode('-',$data_studentPaymentInfos[2]->date)
                                         ?>
                                                                  {{ Form::text('instalment_2_date', $studentPaymentInfosDate[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_2_month', $studentPaymentInfosDate[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_2_year', $studentPaymentInfosDate[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                               </div>
                                                               </div>{{ Form::label('nationality', 'Method of payment', array('class' => 'col-sm-2 control-label'));  }}
                                    <div class="col-sm-2">
                                       {{ Form::select('instalment_payment_method_2', $method_of_payment,$data_studentPaymentInfos[2]->method,['class'=>'chosen-select col-sm-12']);  }}

                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="form-inline">
                                    {{ Form::label('forename_3', 'Instalment 3', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-2">{{ Form::text('instalment_3',  $data_studentPaymentInfos[3]->payment_amount,['placeholder'=>'Instalment 3','class'=>'form-control']); }}</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-2"><div class="form-inline">
                                     <?php
                                                  $studentPaymentInfosDate = explode('-',$data_studentPaymentInfos[3]->date)
                                     ?>
                                                                  {{ Form::text('instalment_3_date',$studentPaymentInfosDate[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_3_month', $studentPaymentInfosDate[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_3_year', $studentPaymentInfosDate[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                               </div>
                                                               </div>{{ Form::label('instalment_payment_method_3', 'Method of payment', array('class' => 'col-sm-2 control-label'));  }}
                                    <div class="col-sm-2">
                                       {{ Form::select('instalment_payment_method_3', $method_of_payment,$data_studentPaymentInfos[3]->method,['class'=>'chosen-select col-sm-12']);  }}

                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                                 {{ Form::label('late_admin_fee', 'Late admin fee', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('late_admin_fee', $data_student_payment_info_metadata->late_admin_fee,['placeholder'=>'Late admin fee','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('late_fee', 'Late fee', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('late_fee', $data_student_payment_info_metadata->late_fee,['placeholder'=>'Late fee','class'=>'form-control']); }}</div>
                              </div>
                           </div>
                        </section>
                        <section class="panel panel-default">
                           <header class="panel-heading font-bold">BQu only</header>
                           <div class="panel-body">
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Application received to BQu date', array('class' => 'col-sm-3 control-label'));  }}
                                <div class="col-sm-3"><div class="form-inline">
                                   <?php
                                              $application_received_date = explode('-',$data_student_bqu_data->application_received_date)
                                 ?>
                                               {{ Form::text('application_received_to_bqu_date', $application_received_date[0],['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                               {{ Form::text('application_received_to_bqu_month', $application_received_date[1],['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                               {{ Form::text('application_received_to_bqu_year', $application_received_date[2],['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                            </div>
                                            </div>
                                            </div>
                              <div class="form-group">
                                 {{ Form::label('application_input_by', 'Application added by', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">
                                 <?php
                                 $applicatin_input_user = DB::table('student_bqu_data')->select('application_input_by')->where('san','=',$data_student->san)->where('status','=','1')->first();

                                 ?>
                                 @if($applicatin_input_user != null))
                                 {{ User::getFirstNameByID($applicatin_input_user->application_input_by).' '.User::getLastNameByID($applicatin_input_user->application_input_by) }}</div>
                             @endif
                              </div>

                               <div class="form-group">
                                 {{ Form::label('application_input_by', 'Application edited by', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::hidden('application_input_by', Sentry::getUser()->id) }}

                                 {{Sentry::getUser()->first_name.' '.Sentry::getUser()->last_name}}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('supervisor', 'Supervisor ', array('class' => 'col-sm-3 control-label'));  }}

                                 <div class="col-sm-9">


                                 <select data-placeholder="Choose a Supervisors" class="chosen-select col-sm-12" id="supervisor" name="supervisor">
                                @foreach($supervisors as $supervisor)
                                <option value="{{ $supervisor->id }}">{{ $supervisor->first_name.' '.$supervisor->last_name }}</option>
                                @endforeach
                                </select>
                                 </div>
                              </div>
                              <!--<div class="form-group">
                                 {{ Form::label('date_of_birth', 'Applicant verified by BQu date', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-3"><div class="form-inline">
                                                {{ Form::text('applicant_verified_by_bqu_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('applicant_verified_by_bqu_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('applicant_verified_by_bqu_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>-->
                              <div class="form-group">
                                 <label class="col-sm-1 control-label"></label>
                                 <label class="col-sm-2 control-label">Status </label>
                                 <div class="col-sm-9">
{{ Form::hidden('admission_status','2') }}
Validated

                                 </div>
                              </div>

                              <div class="form-group">
                                                               {{ Form::label('notes', 'Notes', array('class' => 'col-sm-3 control-label'));  }}
                                                               <div class="col-sm-9">{{ Form::textarea('notes', $data_student_bqu_data->notes,['placeholder'=>'','class'=>'form-control']); }}</div>
                                                            </div>

                           </div>
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                                       <div class="form-group">
                                          <div class="col-sm-3"></div>
                                          <div class="col-sm-9">
                                             <div class="checkbox i-checks">
                                                <label>
                                               {{ Form::checkbox('confirm_save', '1',false,array('data-required'=>'true')); }}
                                                <i></i>
                                                Confirm Save
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="line line-dashed b-b line-lg pull-in"></div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label"> </label>
                              <div class="col-sm-9">
                              {{ Form::submit('Save', array('class' => 'btn btn-s-md btn-primary')) }}
                              </div>
                           </div>
                        </section>
{{ Form::close() }}
   </div>
</div>
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




$( "#san" ).keydown(function() {
    $('#top_san_display').html('SAN : '+this.value);
 // $('#top_san_display').append($(this).val());

});
$( "#ls_student_number" ).keydown(function() {
    $('#top_lssn_display').html('LS SN : '+this.value);
 // $('#top_lssn_display').append($(this).val());
});



$('[name="nationality"]').prepend("<option value='0'>Please Select an Option</option>");

 $('[name="nationality"]').trigger("chosen:updated");


$('[name="information_source"]').prepend("<option value='0'>Please Select an Option</option>");

 $('[name="information_source"]').trigger("chosen:updated");


$('[name="agents_laps"]').append("<option value='1000'>Other</option>");
$('[name="agents_laps"]').prepend("<option value='0'>Please Select an Option</option>");
 $('[name="agents_laps"]').trigger("chosen:updated");
  $('[name="agents_laps"]').val('{{ $data_studentSource->agent_lap }}').trigger("chosen:updated");


$('[name="admission_manager"]').prepend("<option value='0'>Please Select an Option</option>");
$('[name="admission_manager"]').append("<option value='1000'>Other</option>");
 $('[name="admission_manager"]').trigger("chosen:updated");
 $('[name="admission_manager"]').val('{{ $data_studentSource->admission_manager }}').trigger("chosen:updated");





$('[name="qualification_1"]').append("<option value='0'>Other</option>");
$('[name="qualification_1"]').trigger("chosen:updated");
$('[name="qualification_1"]').prepend("<option value='1000'>Please Select an Option</option>");
$('[name="qualification_1"]').trigger("chosen:updated");


$('[name="tt_country"]').prepend("<option value='0'>Please select a country</option>");
$('[name="tt_country"]').trigger("chosen:updated");
$('[name="tt_country"]').trigger("chosen:updated");

$('[name="country"]').prepend("<option value='0'>Please select a country</option>");
$('[name="country"]').trigger("chosen:updated");


//$('[name="qualification_1_other"]').hide();
//$('[name="agents_laps_other"]').hide();
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

$('[name="qualification_2"]').prepend("<option value='1000'>Please Select an Option</option>");
$('[name="qualification_2"]').val('1000').trigger("chosen:updated");

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

$('[name="qualification_3"]').prepend("<option value='1000'>Please Select an Option</option>");
$('[name="qualification_3"]').val('1000').trigger("chosen:updated");

//$('[name="qualification_3_other"]').hide();

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

@section('main_menu')

 @stop

 @section('san')
 <span id="top_san_display" class="nav navbar-nav navbar-center input-s-lg m-t m-l-n-xs" style="color: black;font-size: 24px !important">SAN : {{ $data_student->san }}</span>
 <span id="top_lssn_display" class="nav navbar-nav navbar-center input-s-lg m-t m-l-n-xs" style="color: black;font-size: 24px !important">LS SN : {{ $data_student->ls_student_number }}</span>
 @stop