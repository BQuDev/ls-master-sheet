<html>

<tr>
<th>SAN</th>
 <th>App date</th>
 <th>AMS date</th>
 <th>Agent type</th>
 <th>Admission Manager	</th>
 <th>Agent name</th>

 <th>Title</th>
  <th>	Initial 1	</th>
 <th>Initial 2</th>
 <th>Initial 3</th>
 <th>Forename1</th>
 <th>Forename2	</th>
 <th>Forename3	</th>
 <th>Surname	</th>
 <th>Gender	</th>
 <th>Date of birth (DD/MM/YY)	</th>
 <th>Nationality	</th>
 <th>Passport	</th>
 <th>UK - Address -  Address 1</th>
 <th>UK - Address -  Address 2</th>
 <th>UK - Address - Town/City	</th>
 <th>UK - Address - Post Code	</th>
 <th>UK - Address - Country	</th>
 <th>UK - Mobile</th>
  <th>UK- Land line	</th>
 <th>Country of origin - Address 1	</th>
 <th>Country of origin - Address 2	</th>
 <th>Country of origin - Town/City	</th>
 <th>Country of origin - Post code	</th>
 <th>Country of origin - Country	</th>
 <th>Country of origin - Telephone - mobile</th>
 <th>Country of origin - Telephone - Land line</th>
 <th>Email 1</th>
 <th>Email 2	</th>
 <th>Social Accounts - Facebook	</th>
 <th>Social Accounts - LinkedIn	</th>
 <th>Social Accounts - Twitter	</th>
 <th>Social Accounts - Other Social Media	</th>



 <th>Top up / Advanced entry	</th>
 <th>Awarding body	</th>
 <th>Course Name	</th>
 <th>Start date (dd/mm/yy)	</th>
 <th>Study mode	</th>
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
 <th>	start date (dd/mm/yy)	</th>
 <th>	end date (dd/mm/yy)	</th>
 <th>	Curently working	</th>
 <th>	Duties and responsibilities	</th>
 <th>Occupation 2	</th>
 <th>	Company Name - Address	</th>
 <th>	start date (dd/mm/yy)	</th>
 <th>	end date (dd/mm/yy)	</th>
 <th>	Curently working	</th>
 <th>	Duties and responsibilities	</th>
 <th>Occupation 1	</th>
 <th>	Company Name - Address	</th>
 <th>	start date (dd/mm/yy)	</th>
 <th>	end date (dd/mm/yy)	</th>
 <th>	Curently working	</th>
 <th>	Duties and responsibilities	</th>

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
?>
@foreach(DB::table('students')->select('*')->get() as $main_student)
<?php




    $studentSource = DB::table('student_sources')->where('san','=',$main_student->san)->orderBy('id', 'desc')->first();
    $studentSourceArray = objectToArray($studentSource);

?>
<tr>
<td>{{ Student::lastRecordBySAN($main_student->san)->san; }}</td>
<td>{{ $studentSourceArray['app_date']; }}</td>
<td>{{ $studentSourceArray['ams_date']; }}</td>
<td>To -Do</td>
<td>
    @if($studentSourceArray['admission_manager'] ==0)
    {{ 'Other' }}
    @else
    {{ ApplicationAdmissionManager::getNameByID($studentSourceArray['admission_manager']); }}
    @endif
</td>
<td>

</td>

<td>{{ Student::lastRecordBySAN($main_student->san)->title; }}</td>
<td>{{ Student::lastRecordBySAN($main_student->san)->initials_1; }}</td>
<td>{{ Student::lastRecordBySAN($main_student->san)->initials_2; }}</td>
<td>{{ Student::lastRecordBySAN($main_student->san)->initials_3; }}</td>
<td>{{ Student::lastRecordBySAN($main_student->san)->forename_1; }}</td>
<td>{{ Student::lastRecordBySAN($main_student->san)->forename_2; }}</td>
<td>{{ Student::lastRecordBySAN($main_student->san)->forename_3; }}</td>
<td>{{ Student::lastRecordBySAN($main_student->san)->surname; }}</td>
<td>{{ Student::lastRecordBySAN($main_student->san)->gender; }}</td>
<td>{{ Student::lastRecordBySAN($main_student->san)->date_of_birth; }}</td>
<td>{{ StaticNationality::getNameByID(Student::lastRecordBySAN($main_student->san)->nationality); }}</td><!--To-Do-->
<td>{{ Student::lastRecordBySAN($main_student->san)->passport; }}</td>

<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student->san)->address_1; }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student->san)->address_2; }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student->san)->city; }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student->san)->post_code; }}</td>
<td>{{ StaticCountry::getNameByID(StudentContactInformation::lastUKRecordBySAN($main_student->san)->country); }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student->san)->mobile; }}</td>
<td>{{ StudentContactInformation::lastUKRecordBySAN($main_student->san)->landline; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student->san)->address_1; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student->san)->address_2; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student->san)->city; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student->san)->post_code; }}</td>
<td>{{ StaticCountry::getNameByID(StudentContactInformation::lastRecordBySAN($main_student->san)->country); }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student->san)->mobile; }}</td>
<td>{{ StudentContactInformation::lastRecordBySAN($main_student->san)->landline; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student->san)->email; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student->san)->alternative_email; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student->san)->facebook; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student->san)->linkedin; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student->san)->twitter; }}</td>
<td>{{ StudentContactInformationOnline::lastRecordBySAN($main_student->san)->other_social; }}</td>

<td>{{ StudentCourseEnrolment::lastRecordBySAN($main_student->san)->course_level; }}</td>
<td>{{ ApplicationAwardingBody::getNameByID(StudentCourseEnrolment::lastRecordBySAN($main_student->san)->awarding_body); }}</td>
<td>{{ ApplicationCourse::getNameByID(StudentCourseEnrolment::lastRecordBySAN($main_student->san)->course_name); }}</td>
<td>

{{ StaticYear::getNameByID(ApplicationIntake::getRowByID(StudentCourseEnrolment::lastRecordBySAN($main_student->san)->intake)->year).'-'.StaticMonth::getNameByID(ApplicationIntake::getRowByID(StudentCourseEnrolment::lastRecordBySAN($main_student->san)->intake)->month); }}</td><!--To-Do-->
<td>{{ StudentCourseEnrolment::lastRecordBySAN($main_student->san)->study_mode; }}</td>
@foreach(StudentEducationalQualification::lastThreeRecordsBySAN($main_student->san) as $student)
<td>

</td>
<td>{{ $student->institution; }}</td>
<td>{{ $student->qualification_start_date; }}</td>
<td>{{ $student->qualification_end_date; }}</td>
<td>{{ $student->qualification_grade; }}</td>
@endforeach
@foreach(StudentWorkExperience::lastThreeRecordsBySAN($main_student->san) as $studentWorkExperience)
<td>{{ $studentWorkExperience->occupation; }}</td>
<td>{{ $studentWorkExperience->company_name; }}</td>
<td>{{ $studentWorkExperience->occupation_start_date; }}</td>
<td>{{ $studentWorkExperience->occupation_end_date; }}</td>
<td>{{ $studentWorkExperience->currently_working; }}</td>
<td>{{ $studentWorkExperience->main_duties; }}</td>
@endforeach



@foreach(StudentPaymentInfo::lastFourRecordsBySAN($main_student->san) as $studentPaymentInfo)
<td>{{ $studentPaymentInfo->payment_amount; }}</td>
<td>{{ $studentPaymentInfo->date; }}</td>
<td>{{ $studentPaymentInfo->method; }}</td>
@endforeach

<td> To-Do </td>
<td>To-Do </td>

<td>{{ StudentBquData::lastRecordBySAN($main_student->san)->application_received_date; }}</td>
<td>{{ StudentBquData::lastRecordBySAN($main_student->san)->application_input_by; }}</td>
<td>{{ StudentBquData::lastRecordBySAN($main_student->san)->verified_date; }}</td>
<td>{{ StudentBquData::lastRecordBySAN($main_student->san)->status; }}</td>

<td>{{ Student::lastRecordBySAN($main_student->san)->ls_student_number; }}</td>


</tr>
@endforeach
</html>