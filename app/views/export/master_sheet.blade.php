<html>

<tr>
<th>SAN</th>
 <th>App Date</th>
 <th>AMS Date</th>
 <th>Source</th>
 <th>Agent /LAP</th>
 <th>Admission Manager	</th>


 <th>Title</th>
  <th>	Initial 1	</th>
 <th>Initial 2</th>
 <th>Initial 3</th>
 <th>Forename 1</th>
 <th>Forename 2	</th>
 <th>Forename 3	</th>
 <th>Surname	</th>
 <th>Gender	</th>
 <th>Date of birth (DD/MM/YY)	</th>
 <th>Nationality	</th>
 <th>Passport number</th>
 <th>Term time - Address - street</th>
 <th>Term time - Address - Address 2</th> <!-- To-Do -->
 <th>Term time - Address - Town/City</th>
 <th>Term time - Address - Post code	</th>
 <th>Term time - Address - Country	</th>
 <th>Term time - Mobile</th>
  <th>Term time - Landline	</th>
 <th>Permanent - Address line 1	</th>
 <th>Permanent - Address line 2	</th>
 <th>Permanent - Town/City	</th>
 <th>Permanent - Post code	</th>
 <th>Permanent - Country	</th>
 <th>Permanent - Telephone - mobile</th>
 <th>Country of origin - Telephone - Land line</th>
 <th>Email 1</th>
 <th>Alternative Email	</th>
 <th>Social Accounts - Facebook	</th>
 <th>Social Accounts - LinkedIn	</th>
 <th>Social Accounts - Twitter	</th>
 <th>Social Accounts - Other Social Media	</th>

  <th>Title	</th>
   <th>Forename	</th>
    <th>Surname		</th>
     <th>Telephone	</th>
      <th>Email</th>


 <th>Course Name	</th>
 <th>Top up / Advanced entry	</th>
 <th>Awarding body	</th>

 <th>Intake	</th>
 <th>Study mode	</th>
 <th>English language level</th>
 <th>Qualification 3	</th>
 <th>	Institutuion	</th>
 <th>	Start date (dd/mm/yy)	</th>
 <th>	end date (dd/mm/yy)</th>
 	<th>Grade	</th>
 <th>Qualification 2</th>
 <th>	Institutuion	</th>
 <th>	Start date (dd/mm/yy)	</th>
 <th>	end date (dd/mm/yy)	</th>
 <th>	Grade	</th>
 <th>Qualification 1	</th>
 <th>	Institutuion	</th>
 <th>	Start date (dd/mm/yy)	</th>
 <th>	end date (dd/mm/yy)	</th>
 <th>	Grade	</th>
 <th>Occupation 3	</th>
 <th>	Company Name - Address	</th>
  <th>	Duties and responsibilities	</th>
 <th>	start date (dd/mm/yy)	</th>
 <th>	end date (dd/mm/yy)	</th>
 <th>	Curently working	</th>

 <th>Occupation 2	</th>
 <th>	Company Name - Address	</th> <th>	Duties and responsibilities	</th>
 <th>	start date (dd/mm/yy)	</th>
 <th>	end date (dd/mm/yy)	</th>
 <th>	Curently working	</th>

 <th>Occupation 1	</th>
 <th>	Company Name - Address	</th> <th>	Duties and responsibilities	</th>
 <th>	start date (dd/mm/yy)	</th>
 <th>	end date (dd/mm/yy)	</th>
 <th>	Curently working	</th>


 <th>Installment 3	</th>
 <th>Date of payment	</th>
 <th>Method of payment	</th>
 <th>Installment 2	</th>
 <th>Date of payment	</th>
 <th>Method of payment	</th>

  <th>Installment 1	</th>
  <th>Date of payment	</th>
  <th>Method of payment	</th>
  <th>Deposit</th>
  <th>	Date of payment	</th>
  <th>Method of payment	</th>
 <th>Late admin fee	</th>
 <th>Late Fee	</th>
 <th>App received to Bqu date (dd/mm/yy)	</th>
 <th>App input by	</th>
 <th>Supervisor	</th>
 <th>App verified date (dd/mm/yy)	</th>
 <th>App verified by	Status	</th>
 <th>LSM Student number</th>
</tr>
<?php
function objectToArray($d) {
 if (is_object($d)) {
 // Gets the properties of the given object
 // with get_object_vars function
 $d = get_object_vars($d);
 }

 if (is_array($d)) {
 /*
 * Return array converted to object
 * Using __FUNCTION__ (Magic constant)
 * for recursive call
 */
 return array_map(__FUNCTION__, $d);
 }
 else {
 // Return array
 return $d;
 }
 }


//$students = DB::table('students')->select('*')->get();
///$sub = array();

$results =  DB::table('students')->select('san')->get();
   // return $results;
    $rr = array();
    foreach($results as $result){
        $rr[] = $result->san;
    }

    $rr = array_flatten($rr);

?>


@foreach( $rr  as $main_student)
<?php


Log::info('enter'.$main_student);

    $studentSource = DB::table('student_sources')->where('san','=',$main_student)->orderBy('id', 'desc')->first();
    $studentSourceArray = objectToArray($studentSource);

?>
<tr>
<td>{{ Student::lastRecordBySAN($main_student)->san; }}</td>
<td>{{ $studentSourceArray['app_date']; }}</td>
<td>{{ $studentSourceArray['ams_date']; }}</td>
<td>
@if(intval($studentSourceArray['source'])>0) {{
ApplicationSource::getNameByID(intval($studentSourceArray['source'])) }}
 @endif
 </td>
<td>
@if(intval($studentSourceArray['agent_lap']) == 1000)
{{ $studentSourceArray['agents_laps_other'] }}
 @elseif(($studentSourceArray['admission_manager'] ==6)&(intval($studentSourceArray['agent_lap'])>0))
 {{ ApplicationLap::getNameByID($studentSourceArray['agent_lap'])  }}
 @elseif(intval($studentSourceArray['agent_lap'])>0)
 {{ApplicationAgent::getNameByID($studentSourceArray['agent_lap']) }}
 @endif
</td>
<td>
    @if(intval($studentSourceArray['admission_manager']) == 1000)
    {{ $studentSourceArray['admission_managers_other'] }}
    @elseif(intval($studentSourceArray['admission_manager']) >0)
    {{ ApplicationAdmissionManager::getNameByID($studentSourceArray['admission_manager']); }}
    @endif
</td>


<td>{{ Student::lastRecordBySAN($main_student)->title; }}</td>
<td>{{ Student::lastRecordBySAN($main_student)->initials_1; }}</td>
<td>{{ Student::lastRecordBySAN($main_student)->initials_2; }}</td>
<td>{{ Student::lastRecordBySAN($main_student)->initials_3; }}</td>
<td>{{ Student::lastRecordBySAN($main_student)->forename_1; }}</td>
<td>{{ Student::lastRecordBySAN($main_student)->forename_2; }}</td>
<td>{{ Student::lastRecordBySAN($main_student)->forename_3; }}</td>
<td>{{ Student::lastRecordBySAN($main_student)->surname; }}</td>
<td>{{ Student::lastRecordBySAN($main_student)->gender; }}</td>
<td>{{ Student::lastRecordBySAN($main_student)->date_of_birth; }}</td>
<td>{{ StaticNationality::getNameByID(Student::lastRecordBySAN($main_student)->nationality); }}</td><!--To-Do-->
<td>{{ Student::lastRecordBySAN($main_student)->passport; }}</td>

<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student)->address_1; }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student)->address_2; }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student)->city; }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student)->post_code; }}</td>
<td>{{ StaticCountry::getNameByID(StudentContactInformation::lastUKRecordBySAN($main_student)->country); }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student)->mobile; }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student)->landline; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student)->address_1; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student)->address_2; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student)->city; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student)->post_code; }}</td>
<td>{{ StaticCountry::getNameByID(StudentContactInformation::lastRecordBySAN($main_student)->country); }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student)->mobile; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student)->landline; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student)->email; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student)->alternative_email; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student)->facebook; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student)->linkedin; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student)->twitter; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student)->other_social; }}</td>


<td>{{ StudentContactInformationKinDetail::lastRecordBySAN($main_student)->next_of_kin_title }}</td>
<td>{{ StudentContactInformationKinDetail::lastRecordBySAN($main_student)->next_of_kin_forename; }}</td>
<td>{{ StudentContactInformationKinDetail::lastRecordBySAN($main_student)->next_of_kin_surname; }}</td>
<td>{{ StudentContactInformationKinDetail::lastRecordBySAN($main_student)->next_of_kin_telephone; }}</td>
<td>{{ StudentContactInformationKinDetail::lastRecordBySAN($main_student)->next_of_kin_email; }}</td>


<td>{{ ApplicationCourse::getNameByID(StudentCourseEnrolment::lastRecordBySAN($main_student)->course_name); }}</td>
<td>{{ StudentCourseEnrolment::lastRecordBySAN($main_student)->course_level; }}</td>
<td>{{ ApplicationAwardingBody::getNameByID(StudentCourseEnrolment::lastRecordBySAN($main_student)->awarding_body); }}</td>

<td>

{{ StaticYear::getNameByID(ApplicationIntake::getRowByID(StudentCourseEnrolment::lastRecordBySAN($main_student)->intake)->year).'-'.StaticMonth::getNameByID(ApplicationIntake::getRowByID(StudentCourseEnrolment::lastRecordBySAN($main_student)->intake)->month); }}</td><!--To-Do-->
<td>{{ StudentCourseEnrolment::lastRecordBySAN($main_student)->study_mode; }}</td>
<td>
@if(StudentEnglishLangLevels::lastRecordBySAN($main_student)->english_language_level != 'null')
{{ StudentEnglishLangLevels::lastRecordBySAN($main_student)->english_language_level; }}
@endif</td>
@foreach(StudentEducationalQualification::lastThreeRecordsBySAN($main_student) as $student)
<td>
@if(intval($student->qualification) == 0)
{{ $student->qualification_other }}
@elseif(intval($student->qualification) > 0)
{{ ApplicationEducationalQualification::getNameByID($student->qualification) }}
@endif
</td>
<td>{{ $student->institution; }}</td>
<td>{{ $student->qualification_start_date; }}</td>
<td>{{ $student->qualification_end_date; }}</td>
<td>{{ $student->qualification_grade; }}</td>
@endforeach
@foreach(StudentWorkExperience::lastThreeRecordsBySAN($main_student) as $studentWorkExperience)
<td>{{ $studentWorkExperience->occupation; }}</td>
<td>{{ $studentWorkExperience->company_name; }}</td>
<td>{{ $studentWorkExperience->main_duties; }}</td>
<td>{{ $studentWorkExperience->occupation_start_date; }}</td>
<td>{{ $studentWorkExperience->occupation_end_date; }}</td>
<td>{{ $studentWorkExperience->currently_working; }}</td>

@endforeach



@foreach(StudentPaymentInfo::lastFourRecordsBySAN($main_student) as $studentPaymentInfo)
<td>{{ $studentPaymentInfo->payment_amount; }}</td>
<td>{{ $studentPaymentInfo->date; }}</td>
<td>
@if(intval($studentPaymentInfo->method)>0)
{{ ApplicationPaymentInfoMethodsOfPayment::getNameByID($studentPaymentInfo->method); }}
@endif</td>
@endforeach

<td> To-Do

 </td>
<td>To-Do </td>

<td>{{ StudentBquData::lastRecordBySAN($main_student)->application_received_date; }}</td>
<td>{{ StudentBquData::lastRecordBySAN($main_student)->application_input_by; }}</td>
<td>{{ StudentBquData::lastRecordBySAN($main_student)->supervisor; }}</td>
<td>{{ StudentBquData::lastRecordBySAN($main_student)->verified_date; }}</td>
<td>{{ ApplicationStatus::getNameByID(StudentBquData::lastRecordBySAN($main_student)->status); }}</td>

<td>{{ Student::lastRecordBySAN($main_student)->ls_student_number; }}</td>


</tr>
<?php
Log::info('out'.$main_student);
?>
@endforeach
</html>