@extends('layouts.main')
@section('content')
<div class="row" style="min-height: 50px;"></div>
<div class="row">
   <div class="col-sm-12">
      {{ Form::open(array('url' =>URL::to("/").'/students/validate',  'class'=>'form-horizontal','method' => 'post','data-validate'=>'parsley')) }}
      
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left">{{ Form::label('san', 'Student Application Number (SAN)', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->san }} </td>
    <td width="24%" align="left"><form id="form1" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox" id="checkbox" />
      <label for="checkbox"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"><span id="ls_student_number_temp">{{ $student->ls_student_number }}</span></td>
    <td width="24%" align="left"><form id="form2" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox2" id="checkbox2" />
      <label for="checkbox2"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('app_date', 'App Date', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> {{ $studentSource->app_date }}</td>
    <td width="24%" align="left"><form id="form3" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox3" id="checkbox3" />
      <label for="checkbox3"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('ams_date', 'AMS Date', array('class' => ' control-label'));  }}</td>
    <td width="46%" align="left"> {{ $studentSource->ams_date }}</td>
    <td width="24%" align="left"><form id="form4" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox4" id="checkbox4" />
      <label for="checkbox4"></label>
    </form></td>
  </tr>
     </table>

     
      <section class="panel panel-default">
        <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>
         <div class="panel-body">
         
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left"> {{ Form::label('information_source', 'Information Source', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">

    @if(intval($studentSource->source)>0)
    {{ ApplicationSource::getNameByID(intval($studentSource->source)) }}
     @endif

    </td>
    <td width="24%" align="left"><form id="form5" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox5" id="checkbox5" />
      <label for="checkbox5"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('admission_manager', 'Admission manager', array('class' => 'control-label'));  }}</td>
    <td align="left">
        @if(intval($studentSource->admission_manager) == 1000)
        {{ $studentSource->admission_managers_other }}
        @elseif(intval($studentSource->admission_manager) >0)
        {{ ApplicationAdmissionManager::getNameByID($studentSource->admission_manager); }}
        @endif
    </td>
    <td align="left"><form id="form6" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox6" id="checkbox6" />
      <label for="checkbox6"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'control-label'));  }}</td>
    <td align="left">
    @if(intval($studentSource->agent_lap) == 1000)
    {{ $studentSource->agents_laps_other }}
     @elseif((intval($studentSource->source) == 2)&(intval($studentSource->agent_lap)>0))
     {{ ApplicationLap::getNameByID($studentSource->agent_lap)  }}
     @elseif(intval($studentSource->agent_lap)>0)
     {{ApplicationAgent::getNameByID($studentSource->agent_lap) }}
     @endif
    </td>
    <td align="left"><form id="form7" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox7" id="checkbox7" />
      <label for="checkbox7"></label>
    </form></td>
  </tr>
</table>

        </div>
     </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">PERSONAL DATA</header>
         <div class="panel-body">
         
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left">  <label class="control-label">Title</label></td>
    <td width="46%" align="left"> {{ $student->title }}</td>
    <td align="left"><form id="form8" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox8" id="checkbox8" />
      <label for="checkbox8"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('initials', 'Initials', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->initials_1 }}&nbsp;{{ $student->initials_2 }}&nbsp;{{ $student->initials_3 }}</td>
    <td align="left"><form id="form9" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox9" id="checkbox9" />
      <label for="checkbox9"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('forename_1', 'Forename 1', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->forename_1 }}</td>
    <td align="left"><form id="form10" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox10" id="checkbox10" />
      <label for="checkbox10"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('forename_2', 'Forename 2', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->forename_2 }}</td>
    <td align="left"><form id="form11" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox11" id="checkbox11" />
      <label for="checkbox11"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('forename_3', 'Forename 3', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->forename_3 }}</td>
    <td align="left"><form id="form12" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox12" id="checkbox12" />
      <label for="checkbox12"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->surname }}</td>
    <td align="left"><form id="form13" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox13" id="checkbox13" />
      <label for="checkbox13"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> <label class="control-label">Gender</label></td>
    <td width="46%" align="left"> {{ $student->gender }}</td>
    <td align="left"><form id="form14" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox14" id="checkbox14" />
      <label for="checkbox14"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('date_of_birth', 'Date of birth', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->date_of_birth }}</td>
    <td align="left"><form id="form15" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox15" id="checkbox15" />
      <label for="checkbox15"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('nationality', 'Nationality', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
    @if($student->nationality > 0)
    {{ StaticNationality::getNameByID($student->nationality); }}
    @endif
    </td>
    <td align="left"><form id="form16" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox16" id="checkbox16" />
      <label for="checkbox16"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('passport', 'Passport number', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->passport }}</td>
    <td align="left"><form id="form17" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox17" id="checkbox17" />
      <label for="checkbox17"></label>
    </form></td>
  </tr>
</table>

         
          
              
           
           
        </div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">CONTACT INFORMATION</header>
         <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Term time</div>
        <div class="line line-dashed b-b line-lg pull-in"></div>
         <div class="panel-body">
         
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left">  <label class="control-label">Address line 1</label></td>
    <td width="46%" align="left"> {{ $ttStudentContactInformation->address_1 }}</td>
    <td align="left"><form id="form18" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox18" id="checkbox18" />
      <label for="checkbox18"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> <label class="control-label">Address line 2</label></td>
    <td width="46%" align="left">{{ $ttStudentContactInformation->address_2 }}</td>
    <td align="left"><form id="form19" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox19" id="checkbox19" />
      <label for="checkbox19"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">  <label class="control-label">Town/City</label></td>
    <td width="46%" align="left">{{ $ttStudentContactInformation->city }}</td>
    <td align="left"><form id="form20" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox20" id="checkbox20" />
      <label for="checkbox20"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Post code</label></td>
    <td width="46%" align="left">{{ $ttStudentContactInformation->post_code }}</td>
    <td align="left"><form id="form22" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox22" id="checkbox22" />
      <label for="checkbox22"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Country</label></td>
    <td width="46%" align="left">
    @if($ttStudentContactInformation->country >0)
    {{ StaticCountry::getNameByID($ttStudentContactInformation->country); }}
    @endif
    </td>
    <td align="left"><form id="form21" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox21" id="checkbox21" />
      <label for="checkbox21"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Mobile</label></td>
    <td width="46%" align="left">{{ $ttStudentContactInformation->mobile }}</td>
    <td align="left"><form id="form23" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox23" id="checkbox23" />
      <label for="checkbox23"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Landline</label></td>
    <td width="46%" align="left"> {{ $ttStudentContactInformation->landline }}</td>
    <td align="left"><form id="form24" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox24" id="checkbox24" />
      <label for="checkbox24"></label>
    </form></td>
  </tr>

</table>

 
        <!-- Country of origin -->
        <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Permanent</div>
         <div class="line line-dashed b-b line-lg pull-in"></div>
         <div class="panel-body">
         
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left">  <label class="control-label">Address line 1</label></td>
    <td width="46%" align="left"> {{ $studentContactInformation->address_1 }}</td>
    <td align="left"><form id="form25" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox25" id="checkbox25" />
      <label for="checkbox25"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Address line 2</label></td>
    <td width="46%" align="left">{{ $studentContactInformation->address_2 }}</td>
    <td align="left"><form id="form26" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox26" id="checkbox26" />
      <label for="checkbox26"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Town/City</label></td>
    <td width="46%" align="left">{{ $studentContactInformation->city }}</td>
    <td align="left"><form id="form27" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox27" id="checkbox27" />
      <label for="checkbox27"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Post code</label></td>
    <td width="46%" align="left">{{ $studentContactInformation->post_code }}</td>
    <td align="left"><form id="form28" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox28" id="checkbox28" />
      <label for="checkbox28"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Country</label></td>
    <td width="46%" align="left">
        @if($studentContactInformation->country >0)
        {{ StaticCountry::getNameByID($studentContactInformation->country); }}
        @endif
    </td>
    <td align="left"><form id="form29" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox29" id="checkbox29" />
      <label for="checkbox29"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> <label class="control-label">Mobile</label></td>
    <td width="46%" align="left"> {{ $studentContactInformation->mobile }}</td>
    <td align="left"><form id="form30" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox30" id="checkbox30" />
      <label for="checkbox30"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> <label class="control-label">Landline</label></td>
    <td width="46%" align="left"> {{ $studentContactInformation->landline }}</td>
    <td align="left"><form id="form31" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox31" id="checkbox31" />
      <label for="checkbox31"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('email', 'Email ', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $studentContactInformationOnline->email }}</td>
    <td align="left"><form id="form32" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox32" id="checkbox32" />
      <label for="checkbox32"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('alternative_email', 'Alternative Email', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">  {{ $studentContactInformationOnline->alternative_email }}</td>
    <td align="left"><form id="form33" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox33" id="checkbox33" />
      <label for="checkbox33"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">  {{ Form::label('forename_3', 'Facebook', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $studentContactInformationOnline->facebook }}</td>
    <td align="left"><form id="form34" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox34" id="checkbox34" />
      <label for="checkbox34"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('forename_3', 'LinkedIn', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $studentContactInformationOnline->linkedin }}</td>
    <td align="left"><form id="form35" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox35" id="checkbox35" />
      <label for="checkbox35"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('forename_3', 'Twitter', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> {{ $studentContactInformationOnline->twitter}}</td>
    <td align="left"><form id="form36" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox36" id="checkbox36" />
      <label for="checkbox36"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('forename_3', 'Other Social', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">  {{ $studentContactInformationOnline->other_social }}</td>
    <td align="left"><form id="form37" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox37" id="checkbox37" />
      <label for="checkbox37"></label>
    </form></td>
  </tr>
         </table>

          
        </div>
         <div class="line line-dashed b-b line-lg pull-in"></div></div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">Next of Kin Details</header>
         <div class="panel-body">
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left"> <label class="control-label">Title</label></td>
    <td width="46%" align="left">{{ $student_contact_information_kin_detailes->next_of_kin_title }}</td>
    <td align="left"><form id="form38" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox38" id="checkbox38" />
      <label for="checkbox38"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('next_of_kin_forename', 'Forename', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> {{ $student_contact_information_kin_detailes->next_of_kin_forename }}</td>
    <td align="left"><form id="form39" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox39" id="checkbox39" />
      <label for="checkbox39"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('next_of_kin_surname', 'Surname', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> {{ $student_contact_information_kin_detailes->next_of_kin_surname }}</td>
    <td align="left"><form id="form40" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox40" id="checkbox40" />
      <label for="checkbox40"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Telephone</label></td>
    <td width="46%" align="left"> {{ $student_contact_information_kin_detailes->next_of_kin_telephone }}</td>
    <td align="left"><form id="form41" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox41" id="checkbox41" />
      <label for="checkbox41"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('next_of_kin_email', 'Email ', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student_contact_information_kin_detailes->next_of_kin_email }}</td>
    <td align="left"><form id="form42" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox42" id="checkbox42" />
      <label for="checkbox42"></label>
    </form></td>
  </tr>
</table>
</div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">COURSE DETAILS</header>
         <div class="panel-body">
         
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left">{{ Form::label('course_name', 'Course Name', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
    {{ ApplicationCourse::getNameByID($student_course_enrolments->course_name); }} ( {{ $student_course_enrolments->course_level }} )
    </td>
    <td align="left"><form id="form43" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox43" id="checkbox43" />
      <label for="checkbox43"></label>
    </form></td>
  </tr>

  <tr>
    <td width="30%" align="left"> {{ Form::label('awarding_body', 'Awarding Body', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
    {{ ApplicationAwardingBody::getNameByID($student_course_enrolments->awarding_body); }}
    </td>
    <td align="left"><form id="form44" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox44" id="checkbox44" />
      <label for="checkbox44"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('intake1', 'Intake', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
    {{ StaticYear::getNameByID(ApplicationIntake::getRowByID($student_course_enrolments->intake)->year).'-'.StaticMonth::getNameByID(ApplicationIntake::getRowByID($student_course_enrolments->intake)->month); }}
    </td>
    <td align="left"><form id="form45" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox45" id="checkbox45" />
      <label for="checkbox45"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"><label class="control-label">Study mode</label></td>
    <td width="46%" align="left"> {{ $student_course_enrolments->study_mode }}</td>
    <td align="left"><form id="form46" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox46" id="checkbox46" />
      <label for="checkbox46"></label>
    </form></td>
  </tr>
</table>

         
           
        </div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">EDUCATIONAL QUALIFICATIONS</header>
        <div class="panel-body">
         
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left">{{ Form::label('english_language_level1', 'English language level', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
    @if(StudentEnglishLangLevels::lastRecordBySAN($student->san)->english_language_level != 'null')
    <?php
    $english_language_level =StudentEnglishLangLevels::lastRecordBySAN($student->san)->english_language_level;
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
    $english_language_level_export = $english_language_level_export.', '.StudentEnglishLangLevels::lastRecordBySAN($student->san)->english_language_level_other;
    }
    $english_language_level_export= ltrim ($english_language_level_export, ',');

    //$english_language_level = str_replace('"]]','"\']',$english_language_level);
    ?>
    {{ $english_language_level_export }}
    @endif
    </td>
    <td align="left"><form id="form47" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox47" id="checkbox47" />
      <label for="checkbox47"></label>
    </form></td>
  </tr>
  
</table>
 @foreach($student_educational_qualifications as $student)
        <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left"> {{ Form::label('qualification_1', 'Qualification', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> @if(intval($student->qualification) == 1000)
                  @elseif(intval($student->qualification) == 0)
                  {{ $student->qualification_other }}
                  @elseif(intval($student->qualification) > 0)
                  {{ ApplicationEducationalQualification::getNameByID($student->qualification) }}
                  @endif</td>
    <td align="left"><form id="form48" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox48" id="checkbox48" />
      <label for="checkbox48"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('institution_1', 'Institution', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> {{ $student->institution; }}</td>
    <td align="left"><form id="form49" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox49" id="checkbox49" />
      <label for="checkbox49"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('qualification_start_date', 'Start date', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->qualification_start_date; }} </td>
    <td align="left"><form id="form50" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox50" id="checkbox50" />
      <label for="checkbox50"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> {{ $student->qualification_end_date; }}</td>
    <td align="left"><form id="form51" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox51" id="checkbox51" />
      <label for="checkbox51"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('qualification_grade', 'Grade', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student->qualification_grade; }}</td>
    <td align="left"><form id="form52" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox52" id="checkbox52" />
      <label for="checkbox52"></label>
    </form></td>
  </tr>
</table>
  @endforeach
        
           
         </div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">WORK EXPERIENCE</header>
         <div class="panel-body">
         @foreach($student_work_experiences as $studentWorkExperience)
        
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left"> {{ Form::label('occupation_1', 'Occupation', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> {{ $studentWorkExperience->occupation; }}</td>
    <td align="left"><form id="form53" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox53" id="checkbox53" />
      <label for="checkbox53"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('company_name_1', 'Company Name - Address', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $studentWorkExperience->company_name; }}</td>
    <td align="left"><form id="form54" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox54" id="checkbox54" />
      <label for="checkbox54"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('main_duties_and_responsibilities_1', 'Main duties and responsibilities', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $studentWorkExperience->main_duties; }}</td>
    <td align="left"><form id="form55" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox55" id="checkbox55" />
      <label for="checkbox55"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('date_of_birth', 'Start date', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> {{ $studentWorkExperience->occupation_start_date; }}</td>
    <td align="left"><form id="form56" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox56" id="checkbox56" />
      <label for="checkbox56"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('date_of_birth', 'End date', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left"> {{ $studentWorkExperience->occupation_end_date; }}</td>
    <td align="left"><form id="form57" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox57" id="checkbox57" />
      <label for="checkbox57"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('date_of_birth', 'Currently working', array('class' => 'control-label'));  }}&nbsp;</td>
    <td width="46%" align="left"> @if($studentWorkExperience->currently_working == 'Yes')
                     {{ $studentWorkExperience->currently_working; }}
                     @endif</td>
    <td align="left"><form id="form58" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox58" id="checkbox58" />
      <label for="checkbox58"></label>
    </form></td>
  </tr>
         </table>

         @endforeach
        
             
  </div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">PAYMENT INFORMATION</header>
         <div class="panel-body">
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left"> {{ Form::label('date_of_birth', 'Course fees', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
      @if($student_payment_info_metadata->course_fees != 'null')
        <?php
        $course_fees =$student_payment_info_metadata->course_fees;
        $course_fees_export = '';
        if(strpos($course_fees,'Self funded')!==false){
        $course_fees_export = $course_fees_export.', Self funded';
        }
        if(strpos($course_fees,'Sponsored by the Company')!==false){
        $course_fees_export = $course_fees_export.', Sponsored by the Company';
        }
        if(strpos($course_fees,'Bank Loan')!==false){
        $course_fees_export = $course_fees_export.', Bank Loan';
        }

        $course_fees_export= ltrim ($course_fees_export, ',');

        //$english_language_level = str_replace('"]]','"\']',$english_language_level);
        ?>
        {{ $course_fees_export }}
        @endif
   </td>
    <td align="left"><form id="form59" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox59" id="checkbox59" />
      <label for="checkbox59"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('date_of_birth', 'Payment Status', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
           @if($student_payment_info_metadata->payment_status  != 'null')
             <?php
             $payment_status =$student_payment_info_metadata->payment_status ;
             $payment_status_export = '';
             if(strpos($payment_status,'Paid in full')!==false){
             $payment_status_export = $payment_status_export.', Paid in full';
             }
             if(strpos($payment_status,'Unpaid')!==false){
             $payment_status_export = $payment_status_export.', Unpaid';
             }
             if(strpos($payment_status,'Deposit paid')!==false){
             $payment_status_export = $payment_status_export.', Deposit paid';
             }

             $payment_status_export= ltrim ($payment_status_export, ',');

             //$english_language_level = str_replace('"]]','"\']',$english_language_level);
             ?>
             {{ $payment_status_export }}
             @endif
    </td>
    <td align="left"><form id="form60" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox60" id="checkbox60" />
      <label for="checkbox60"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('total_fee', 'Total fee', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">  {{ $student_payment_info_metadata->total_fee }}</td>
    <td align="left"><form id="form61" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox61" id="checkbox61" />
      <label for="checkbox61"></label>
    </form></td>
  </tr>
</table>

           <table width="100%" border="0" cellspacing="0" cellpadding="5">
           <?php $i = 0; ?>
   @foreach($studentPaymentInfos as $studentPaymentInfo)
  <tr>
    <td align="left">
    @if($i == 0)
    {{ Form::label('forename_3', 'Deposit', array('class' => 'control-label'));  }}
    @else
    {{ Form::label('forename_3', 'Instalment '.$i, array('class' => 'control-label'));  }}
    @endif</td>
    <td>{{ $studentPaymentInfo->payment_amount; }}</td>
    <td>{{ Form::label('date_of_birth', 'Date', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentPaymentInfo->date; }}</td>
    <td>{{ Form::label('nationality', 'Method of payment', array('class' => 'control-label'));  }}</td>
    <td> @if(intval($studentPaymentInfo->method)==1000)
                     @elseif(intval($studentPaymentInfo->method)>0)
                     {{ ApplicationPaymentInfoMethodsOfPayment::getNameByID($studentPaymentInfo->method); }}

                     @endif</td>
    <td><form id="form62" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox62" id="checkbox62" />
      <label for="checkbox62"></label>
    </form></td>
  </tr> 
  <?php $i++; ?>
 @endforeach
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left">{{ Form::label('late_admin_fee', 'Late admin fee', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student_payment_info_metadata->late_admin_fee }}</td>
    <td align="left"><form id="form63" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox63" id="checkbox63" />
      <label for="checkbox63"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('late_fee', 'Late fee', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student_payment_info_metadata->late_fee }}</td>
    <td align="left"><form id="form64" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox64" id="checkbox64" />
      <label for="checkbox64"></label>
    </form></td>
  </tr>
</table>

           
            
            
        </div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">BQu only</header>
         <div class="panel-body">
         <table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="30%" align="left">{{ Form::label('date_of_birth', 'Application received to BQu date', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">{{ $student_bqu_data->application_received_date }}</td>
    <td align="left"><form id="form65" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox65" id="checkbox65" />
      <label for="checkbox65"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('application_input_by', 'Application input by', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
    {{ User::getFirstNameByID( $student_bqu_data->application_input_by); }}
    </td>
    <td align="left"><form id="form66" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox66" id="checkbox66" />
      <label for="checkbox66"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('application_input_by', 'Application verified by', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
    @if(intval($student_bqu_data->verified_by)>0)
    {{ User::getFirstNameByID( $student_bqu_data->verified_by); }}
    @endif
    </td>
    <td align="left"><form id="form67" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox67" id="checkbox67" />
      <label for="checkbox67"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left">{{ Form::label('application_input_by', 'Application verified date', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
    {{  $student_bqu_data->verified_date }}
    </td>
    <td align="left"><form id="form68" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox68" id="checkbox68" />
      <label for="checkbox68"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> {{ Form::label('supervisor', 'Supervisor ', array('class' => 'control-label'));  }}</td>
    <td width="46%" align="left">
    @if($student_bqu_data->supervisor ==1000)
    @elseif($student_bqu_data->supervisor >0)
    {{ User::getFirstNameByID($student_bqu_data->supervisor); }}
    @endif
    </td>
    <td align="left"><form id="form69" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox69" id="checkbox69" />
      <label for="checkbox69"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> <label class="control-label">Status </label></td>
    <td width="46%" align="left">
    {{ StaticDataStatus::getNameByID($student_bqu_data->status); }}
    </td>
    <td align="left"><form id="form70" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox70" id="checkbox70" />
      <label for="checkbox70"></label>
    </form></td>
  </tr>
  <tr>
    <td width="30%" align="left"> <label class="control-label">Notes </label></td>
    <td width="46%" align="left">
    {{ $student_bqu_data->notes }}
    </td>
    <td align="left"><form id="form71" name="form1" method="post" action="">
      <input type="checkbox" name="checkbox71" id="checkbox71" />
      <label for="checkbox71"></label>
    </form></td>
  </tr>
</table>

         
           
        </div>

     </section>

      <section class="panel panel-default">

              <div class="panel-body">
              {{ Form::hidden('san',$student->san) }}
 {{ Form::submit('Validated', array('class' => 'btn btn-s-md btn-primary')) }}
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

   

       $('#top_san_display').html('{{ "SAN : ".$student->san }}');

       $('#top_lssn_display').html('LS SN : '+$('#ls_student_number_temp').html());


   
   });
   
   
   



   

   
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
<span id="top_san_display" class="nav navbar-nav navbar-center input-s-lg m-t m-l-n-xs" style="color: black;font-size: 24px !important">SAN : </span>
<span id="top_lssn_display" class="nav navbar-nav navbar-center input-s-lg m-t m-l-n-xs" style="color: black;font-size: 24px !important">LS SN : </span>
@stop


  @section('breadcrumb')
     <li><a href="{{ URL::to('/students') }}">Applications</a></li>
     <li class="active">{{ $student->san }}</li>
   @stop

