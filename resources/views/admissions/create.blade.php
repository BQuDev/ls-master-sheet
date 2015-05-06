@extends('layouts.main');
@section('content')
<link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" />
<link rel="stylesheet" href="js/chosen/chosen.css" type="text/css" />
<div class="row" style="min-height: 50px;"></div>
<div class="row">
   <div class="col-sm-12">
      {!! Form::open(array('url' =>URL::to("/").'/index.php/student',  'class'=>'form-horizontal','method' => 'post')) !!}
      <div class="form-group">
         {!! Form::label('san', 'Student Application Number (SAN)', array('class' => 'col-sm-3 control-label'));  !!}
         <div class="col-sm-9">{!! Form::text('san', '',['placeholder'=>'Student Application Number (SAN)','class'=>'form-control']); !!}</div>
      </div>
      <div class="form-group">
         <div class="form-inline">
            {!! Form::label('app_date', 'App Date', array('class' => 'col-sm-3 control-label'));  !!}
            <div class="col-sm-3">
               {!! Form::text('app_date_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
               {!! Form::text('app_date_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
               {!! Form::text('app_date_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
            </div>
            {!! Form::label('ams_date', 'AMS Date', array('class' => 'col-sm-2 control-label'));  !!}
            <div class="col-sm-3">
               {!! Form::text('ams_date_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
               {!! Form::text('ams_date_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
               {!! Form::text('ams_date_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
            </div>
         </div>
      </div>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>
         <div class="panel-body">
            <div class="form-group">
               {!! Form::label('agent_type', 'Source', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">
               {!! Form::select('agent_type', array('LAP' => 'LAP', 'Agent' => 'Agent', 'Direct' => 'Direct'),'',['class'=>'chosen-select col-sm-4']);  !!}

               </div>
            </div>
            <div class="form-group">
               {!! Form::label('agent_names', 'Agent/LAP', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">

                  {!! Form::select('agent_names', $agent_names,'',['class'=>'chosen-select col-sm-4']);  !!}

               </div>
            </div>
            <div class="form-group">
               {!! Form::label('admssion_manager', 'Admssion manager', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9 ">

                   {!! Form::select('admssion_manager', $admission_managers,'',['class'=>'chosen-select col-sm-4']);  !!}

               </div>
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
                     {!! Form::radio('title', 'Mr.',true); !!}
                     <i></i>
                     Mr
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('title', 'Mrs.'); !!}
                     <i></i>
                     Mrs
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('title', 'Miss.'); !!}
                     <i></i>
                     Miss
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('title', 'Ms.'); !!}
                     <i></i>
                     Ms
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('title', 'Dr.'); !!}
                     <i></i>
                     Dr
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('title', 'Other.'); !!}
                     <i></i>
                     Other
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group">
               {!! Form::label('initials', 'Initials', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="form-inline">
                  <div class="col-sm-1">{!! Form::text('initials_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); !!}</div>

                  <div class="col-sm-1">{!! Form::text('initials_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); !!}</div>

                  <div class="col-sm-1">{!! Form::text('initials_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); !!}</div>

               </div>
            </div>
            <div class="form-group">
               {!! Form::label('forename_1', 'Forename 1', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('forename_1', '',['placeholder'=>'Forename 1','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('forename_2', 'Forename 2', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('forename_2', '',['placeholder'=>'Forename 2','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('forename_3', 'Forename 3', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('forename_3', '',['placeholder'=>'Forename 3','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('surname', 'Surname', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('surname', '',['placeholder'=>'Surname','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               <label class="col-sm-3 control-label">Gender</label>
               <div class="col-sm-9">
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('gender', 'Male',true); !!}
                     <i></i>
                     Male
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('gender', 'Female'); !!}
                     <i></i>
                     Female
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'Date of birth', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('date_of_birth_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('date_of_birth_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('date_of_birth_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
               </div>
            <div class="form-group">
               {!! Form::label('nationality', 'Nationality', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">
                  <select style="width:260px" class="chosen-select" id="nationality" name="nationality">
                     <optgroup label="Select One">
                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">Equatorial Guinean</option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">Papua New Guinean</option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">Solomon Islander</option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option>
                     </optgroup>
                  </select>
               </div>
            </div>
            <div class="form-group">
               {!! Form::label('passport', 'Passport number', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9"> {!! Form::text('passport', '',['placeholder'=>'Passport number','class'=>'form-control']); !!}</div>
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
               <label class="col-sm-2 control-label">Street</label>
               <div class="col-sm-9">
                   {!! Form::text('uk_street', '',['placeholder'=>'Street','class'=>'form-control']); !!}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Town/City</label>
               <div class="col-sm-9">
                   {!! Form::text('uk_city', '',['placeholder'=>'Town/City','class'=>'form-control']); !!}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Post code</label>
               <div class="col-sm-9">
                  {!! Form::text('uk_post_code', '',['placeholder'=>'Post code','class'=>'form-control']); !!}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label">Telephone</label>
               <label class="col-sm-2 control-label">Mobile</label>
               <div class="col-sm-9"> <div class="form-inline">
                  +44&nbsp;&nbsp;{!! Form::text('uk_mobile', '',['placeholder'=>'','class'=>'form-control']); !!}
                    </div>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Landline</label>
               <div class="col-sm-9"> <div class="form-inline">
                  +44&nbsp;&nbsp;{!! Form::text('uk_landline', '',['placeholder'=>'','class'=>'form-control']); !!}
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
                  {!! Form::text('address_1', '',['placeholder'=>'Address line 1','class'=>'form-control']); !!}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Address line 2</label>
               <div class="col-sm-9">
                  {!! Form::text('address_2', '',['placeholder'=>'Address line 2','class'=>'form-control']); !!}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Town/City</label>
               <div class="col-sm-9">
                  {!! Form::text('city', '',['placeholder'=>'Town/City','class'=>'form-control']); !!}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Post code</label>
               <div class="col-sm-9">
                  {!! Form::text('post_code', '',['placeholder'=>'Post code','class'=>'form-control']); !!}
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Country</label>
               <div class="col-sm-9">
                  <select style="width:260px" class="chosen-select" id="country" name="country">
                     <optgroup label="Select One">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia, Plurinational State of</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Côte d'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curaçao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran, Islamic Republic of</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Territory, Occupied</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Réunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint Barthélemy</option>
                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin (French part)</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten (Dutch part)</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.S.</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                     </optgroup>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label">Telephone</label>
               <label class="col-sm-2 control-label">Mobile</label>
               <div class="col-sm-9">
                  <div class="form-inline">
                    +&nbsp;&nbsp;
                    {!! Form::text('mobile_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important']); !!}
                    {!! Form::text('mobile_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important']); !!}
                    {!! Form::text('mobile_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important']); !!}
                    {!! Form::text('mobile', '',['placeholder'=>'','class'=>'form-control','style'=>'width:350px !important']); !!}
                  </div>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Landline</label>
               <div class="col-sm-9">
                  <div class="form-inline">
                                      +&nbsp;&nbsp;
                                      {!! Form::text('landline_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important']); !!}
                                      {!! Form::text('landline_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important']); !!}
                                      {!! Form::text('landline_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important']); !!}
                                      {!! Form::text('landline', '',['placeholder'=>'','class'=>'form-control','style'=>'width:350px !important']); !!}
                                    </div>
               </div>
            </div>
            <div class="form-group">
               {!! Form::label('email', 'Email ', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('email', '',['placeholder'=>'Email','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('alternative_email', 'Alternative Email', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('alternative_email', '',['placeholder'=>'Alternative Email','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               <div class="line line-dashed b-b line-lg pull-in"></div>
               {!! Form::label('forename_3', 'Social Accounts', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('facebook', '',['placeholder'=>'Facebook','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('linkedin', '',['placeholder'=>'LinkedIn','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('twitter', '',['placeholder'=>'Twitter','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('other_social', '',['placeholder'=>'Other','class'=>'form-control']); !!}</div>
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
                     {!! Form::radio('next_of_kin_title', 'Mr.',true); !!}
                     <i></i>
                     Mr
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('next_of_kin_title', 'Mrs.'); !!}
                     <i></i>
                     Mrs
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('next_of_kin_title', 'Miss.'); !!}
                     <i></i>
                     Miss
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('next_of_kin_title', 'Ms.'); !!}
                     <i></i>
                     Ms
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('next_of_kin_title', 'Dr.'); !!}
                     <i></i>
                     Dr
                     </label>
                  </div>
                  <div class="radio-inline i-checks">
                     <label>
                     {!! Form::radio('next_of_kin_title', 'Other.'); !!}
                     <i></i>
                     Other
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group">
               {!! Form::label('next_of_kin_forename', 'Forename', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('next_of_kin_forename', '',['placeholder'=>'Forename','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('next_of_kin_surname', 'Surname', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('next_of_kin_surname', '',['placeholder'=>'Surname','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               <label class="col-sm-3 control-label">Telephone</label>
                 <div class="col-sm-9">
                                <div class="form-inline">
                                                    +&nbsp;&nbsp;
                                                    {!! Form::text('next_of_kin_telephone_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important']); !!}
                                                    {!! Form::text('next_of_kin_telephone_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important']); !!}
                                                    {!! Form::text('next_of_kin_telephone_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important']); !!}
                                                    {!! Form::text('next_of_kin_telephone', '',['placeholder'=>'','class'=>'form-control','style'=>'width:350px !important']); !!}
                                                  </div>
                             </div>
            </div>
         </div>
         <div class="form-group">
            {!! Form::label('next_of_kin_email', 'Email ', array('class' => 'col-sm-3 control-label'));  !!}
            <div class="col-sm-9">{!! Form::text('next_of_kin_email', '',['placeholder'=>'Email','class'=>'form-control']); !!}</div>
         </div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">COURSE DETAILS</header>
         <div class="panel-body">
            <div class="form-group">
               {!! Form::label('course_name', 'Course Name', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">
                    <div class="form-inline">
                    {!! Form::select('course_name', $course_names,'',['class'=>'chosen-select col-sm-4']);  !!}

               </div>
               </div>
            </div>
            <div class="form-inline">

            </div>
            <div class="form-group">
               {!! Form::label('awarding_body', 'Awarding Body', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">

                  {!! Form::select('awarding_body', $awarding_bodies,'',['class'=>'chosen-select col-sm-4']);  !!}
               </div>
            </div>
         </div>
         <div class="form-group">
            {!! Form::label('intake1', 'Intake', array('class' => 'col-sm-3 control-label'));  !!}
            <div class="col-sm-9">
               <div class="form-group">
                  <div class="form-inline">
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="1" name="intake[]">
                           <i></i>
                           Jan
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="2" name="intake[]">
                           <i></i>
                           Feb
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="3" name="intake[]">
                           <i></i>
                           Mar
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="4" name="intake[]">
                           <i></i>
                           Apr
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="5" name="intake[]">
                           <i></i>
                           May
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="6" name="intake[]">
                           <i></i>
                           Jun
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="form-inline">
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="7" name="intake[]">
                           <i></i>
                           July
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="8" name="intake[]">
                           <i></i>
                           Aug
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="9" name="intake[]">
                           <i></i>
                           Sep
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="10" name="intake[]">
                           <i></i>
                           Oct
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="11" name="intake[]">
                           <i></i>
                           Nov
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="checkbox i-checks">
                           <label>
                           <input type="checkbox" value="12" name="intake[]">
                           <i></i>
                           Dec
                           </label>
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
                  {!! Form::radio('study_mode', 'Online',true); !!}
                  <i></i>
                  Online
                  </label>
               </div>
               <div class="radio-inline i-checks">
                  <label>
                  {!! Form::radio('study_mode', 'Face to Face'); !!}
                  <i></i>
                  Face to Face
                  </label>
               </div>
               <div class="radio-inline i-checks">
                  <label>
                  {!! Form::radio('study_mode', 'Blended'); !!}
                  <i></i>
                  Blended
                  </label>
               </div>
            </div>
         </div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">EDUCATIONAL QUALIFICATIONS</header>
         <div class="panel-body">
            <div class="form-group">
               {!! Form::label('english_language_level1', 'English language level', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9 ">
                  <div class="form-inline">
                     <div class="col-sm-3 ">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('english_language_level[]', 'CITY & GUILDS',false); !!}
                           <i></i>
                           CITY & GUILDS
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2 ">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('english_language_level[]', 'IELTS',false); !!}
                           <i></i>
                           IELTS
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2 ">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('english_language_level[]', 'ESOL',false); !!}
                           <i></i>
                           ESOL
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-5">
                     <div class="form-inline">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('english_language_level[]', 'Other',false); !!}
                           <i></i>
                           Other
                           </label>
                        </div>
                        {!! Form::text('english_language_level_other', '',['placeholder'=>'','class'=>'form-control']); !!}
                     </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="line line-dashed b-b line-lg pull-in"></div>



            <div class="form-group">
               {!! Form::label('qualification_1', 'Qualification 1', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('qualification_1', '',['placeholder'=>'Qualification','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('institution_1', 'Institution', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('institution_1', '',['placeholder'=>'Institution','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3">
                <div class="form-inline">
                              {!! Form::text('qualification_start_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_start_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_start_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('qualification_end_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_end_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_end_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               {!! Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('qualification_grade_1', '',['placeholder'=>'Pass','class'=>'form-control']); !!}</div>
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
               {!! Form::label('qualification_2', 'Qualification 2', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('qualification_2', '',['placeholder'=>'Qualification','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('institution_2', 'Institution', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('institution_2', '',['placeholder'=>'Institution','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3">
                <div class="form-inline">
                              {!! Form::text('qualification_start_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_start_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_start_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('qualification_end_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_end_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_end_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               {!! Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('qualification_grade_2', '',['placeholder'=>'Pass','class'=>'form-control']); !!}</div>
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
               {!! Form::label('qualification_3', 'Qualification 3', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('qualification_3', '',['placeholder'=>'Qualification','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('institution_3', 'Institution', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('institution_3', '',['placeholder'=>'Institution','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3">
                <div class="form-inline">
                              {!! Form::text('qualification_start_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_start_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_start_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('qualification_end_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_end_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('qualification_end_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               {!! Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('qualification_grade_3', '',['placeholder'=>'Pass','class'=>'form-control']); !!}</div>
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
               {!! Form::label('occupation_1', 'Occupation 1', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('occupation_1', '',['placeholder'=>'Occupation','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('company_name_1', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('company_name_1', '',['placeholder'=>'Company Name - Address','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('main_duties_and_responsibilities_1', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::textarea('main_duties_and_responsibilities_1', '',['placeholder'=>'','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('occupation_start_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_start_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_start_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('occupation_end_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_end_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_end_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               <div class="col-sm-3"></div>
               <div class="col-sm-9">
                  <div class="checkbox i-checks">
                     <label>
                    {!! Form::checkbox('currently_working_1', '1',false); !!}
                     <i></i>
                     Currently working
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-3"></div>
               <div class="col-sm-9">
                  <p>
                     <a href="#" class="btn btn-default btn-sm" id="add_more_occupations_1">Add More Occupations</a>
                  </p>
               </div>
            </div>
            </div>

         <div id="occupation_container_2">
         <div class="line line-dashed b-b line-lg pull-in"></div>
            <div class="form-group">
               {!! Form::label('forename_2', 'Occupation 2', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('occupation_2', '',['placeholder'=>'Occupation','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('company_name_2', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('company_name_2', '',['placeholder'=>'Company Name - Address','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('main_duties_and_responsibilities_2', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::textarea('main_duties_and_responsibilities_2', '',['placeholder'=>'','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('occupation_start_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_start_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_start_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('occupation_end_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_end_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_end_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               <div class="col-sm-3"></div>
               <div class="col-sm-9">
                  <div class="checkbox i-checks">
                     <label>
                    {!! Form::checkbox('currently_working_2', '1',false); !!}
                     <i></i>
                     Currently working
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-3"></div>
               <div class="col-sm-9">
                  <p>
                     <a href="#" class="btn btn-default btn-sm" id="add_more_occupations_2">Add More Occupations</a>
                  </p>
               </div>
            </div>
            </div>


         <div id="occupation_container_3">
         <div class="line line-dashed b-b line-lg pull-in"></div>
            <div class="form-group">
               {!! Form::label('forename_2', 'Occupation 3', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('occupation_3', '',['placeholder'=>'Occupation','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('company_name_3', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('company_name_3', '',['placeholder'=>'Company Name - Address','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('main_duties_and_responsibilities_3', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::textarea('main_duties_and_responsibilities_3', '',['placeholder'=>'','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('occupation_start_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_start_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_start_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  !!}
                <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('occupation_end_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_end_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('occupation_end_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               <div class="col-sm-3"></div>
               <div class="col-sm-9">
                  <div class="checkbox i-checks">
                     <label>
                    {!! Form::checkbox('currently_working_3', '1',false); !!}
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
               {!! Form::label('date_of_birth', 'Course fees', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9 ">
                  <div class="form-inline">
                     <div class="col-sm-2 ">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('course_fees[]', 'Self funded',false); !!}
                           <i></i>
                           Self funded
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-4 ">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('course_fees[]', 'Sponsored by the Company',false); !!}
                           <i></i>
                           Sponsored by the Company
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2 ">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('course_fees[]', 'Bank Loan',false); !!}
                           <i></i>
                           Bank Loan
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'Payment Status', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9 ">
                  <div class="form-inline">
                     <div class="col-sm-2 ">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('payment_status[]', 'Paid in full',false); !!}
                           <i></i>
                           Paid in full
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2 ">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('payment_status[]', 'Unpaid',false); !!}
                           <i></i>
                           Unpaid
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-2 ">
                        <div class="checkbox i-checks">
                           <label>
                           {!! Form::checkbox('payment_status[]', 'Deposit paid',false); !!}
                           <i></i>
                           Deposit paid
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="form-group">
               {!! Form::label('total_fee', 'Total fee', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('total_fee', '',['placeholder'=>'Total fee','class'=>'form-control']); !!}</div>
            </div>
            <div class="line line-dashed b-b line-lg pull-in"></div>
            <div class="form-group">
               <div class="form-inline">
                  {!! Form::label('deposit', 'Deposit', array('class' => 'col-sm-2 control-label'));  !!}
                  <div class="col-sm-2">{!! Form::text('deposit', '',['placeholder'=>'Deposit','class'=>'form-control']); !!}</div>
                  {!! Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  !!}
                  <div class="col-sm-3"><div class="form-inline">
                                                {!! Form::text('deposit_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                                                {!! Form::text('deposit_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                                                {!! Form::text('deposit_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                                             </div>
                                             </div>{!! Form::label('nationality', 'Method of payment', array('class' => 'col-sm-2 control-label'));  !!}
                  <div class="col-sm-2">

                     {!! Form::select('deposit_payment_method_1', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  !!}
                  </div>
                  <div class="line line-dashed b-b line-lg pull-in"></div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-inline">
                  {!! Form::label('forename_3', 'Instalment 1', array('class' => 'col-sm-2 control-label'));  !!}
                  <div class="col-sm-2">{!! Form::text('instalment_1', '',['placeholder'=>'Instalment 1','class'=>'form-control']); !!}</div>
                  {!! Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  !!}
                  <div class="col-sm-3"><div class="form-inline">
                                                {!! Form::text('instalment_1_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                                                {!! Form::text('instalment_1_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                                                {!! Form::text('instalment_1_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                                             </div>
                                             </div>{!! Form::label('nationality', 'Method of payment', array('class' => 'col-sm-2 control-label'));  !!}
                  <div class="col-sm-2">
                     {!! Form::select('instalment_payment_method_1', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  !!}

                  </div>
                  <div class="line line-dashed b-b line-lg pull-in"></div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-inline">
                  {!! Form::label('forename_3', 'Instalment 2', array('class' => 'col-sm-2 control-label'));  !!}
                  <div class="col-sm-2">{!! Form::text('instalment_2', '',['placeholder'=>'Instalment 2','class'=>'form-control']); !!}</div>
                  {!! Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  !!}
                  <div class="col-sm-3"><div class="form-inline">
                                                {!! Form::text('instalment_2_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                                                {!! Form::text('instalment_2_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                                                {!! Form::text('instalment_2_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                                             </div>
                                             </div>{!! Form::label('nationality', 'Method of payment', array('class' => 'col-sm-2 control-label'));  !!}
                  <div class="col-sm-2">
                     {!! Form::select('instalment_payment_method_2', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  !!}

                  </div>
                  <div class="line line-dashed b-b line-lg pull-in"></div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-inline">
                  {!! Form::label('forename_3', 'Instalment 3', array('class' => 'col-sm-2 control-label'));  !!}
                  <div class="col-sm-2">{!! Form::text('instalment_3', '',['placeholder'=>'Instalment 3','class'=>'form-control']); !!}</div>
                  {!! Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  !!}
                  <div class="col-sm-3"><div class="form-inline">
                                                {!! Form::text('instalment_3_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                                                {!! Form::text('instalment_3_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                                                {!! Form::text('instalment_3_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                                             </div>
                                             </div>{!! Form::label('instalment_payment_method_3', 'Method of payment', array('class' => 'col-sm-2 control-label'));  !!}
                  <div class="col-sm-2">
                     {!! Form::select('instalment_payment_method_3', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  !!}

                  </div>
                  <div class="line line-dashed b-b line-lg pull-in"></div>
               </div>
            </div>
            <div class="line line-dashed b-b line-lg pull-in"></div>
            <div class="form-group">
               {!! Form::label('late_admin_fee', 'Late admin fee', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('late_admin_fee', '',['placeholder'=>'Late admin fee','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('late_fee', 'Late fee', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('late_fee', '',['placeholder'=>'Late fee','class'=>'form-control']); !!}</div>
            </div>
         </div>
      </section>
      <section class="panel panel-default">
         <header class="panel-heading font-bold">BQu only</header>
         <div class="panel-body">
            <div class="form-group">
               {!! Form::label('date_of_birth', 'Application received to BQu date', array('class' => 'col-sm-3 control-label'));  !!}
              <div class="col-sm-3"><div class="form-inline">
                             {!! Form::text('application_received_to_bqu_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                             {!! Form::text('application_received_to_bqu_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                             {!! Form::text('application_received_to_bqu_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                          </div>
                          </div>
                          </div>
            <div class="form-group">
               {!! Form::label('application_input_by', 'Application input by', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('application_input_by', '',['placeholder'=>'Application input by','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('supervisor', 'Supervisor ', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-9">{!! Form::text('supervisor', '',['placeholder'=>'Supervisor ','class'=>'form-control']); !!}</div>
            </div>
            <div class="form-group">
               {!! Form::label('date_of_birth', 'Applicant verified by BQu date', array('class' => 'col-sm-3 control-label'));  !!}
               <div class="col-sm-3"><div class="form-inline">
                              {!! Form::text('applicant_verified_by_bqu_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('applicant_verified_by_bqu_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number']); !!}
                              {!! Form::text('applicant_verified_by_bqu_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number']); !!}
                           </div>
                           </div>
                           </div>
            <div class="form-group">
               <label class="col-sm-1 control-label"></label>
               <label class="col-sm-2 control-label">Status </label>
               <div class="col-sm-9">

                  {!! Form::select('admission_status', $application_status,'',['class'=>'chosen-select col-sm-12']);  !!}

               </div>
            </div>
         </div>
         <div class="form-group">
            <label class="col-sm-3 control-label"> </label>
            <div class="col-sm-9">
            {!! Form::submit('Save', array('class' => 'btn btn-s-md btn-primary')) !!}
            </div>
         </div>
      </section>
      {!! Form::close() !!}
   </div>
</div>
@stop




@section('post_scripts')

<script type="text/javascript">



$(function() {
 $( "#qualification_container_2" ).hide();
 $( "#qualification_container_3" ).hide();
 $( "#occupation_container_2" ).hide();
 $( "#occupation_container_3" ).hide();

});

$( "#add_more_qualifications" ).click(function() {
      $( "#qualification_container_2" ).show( "slow", function() { });
      $( "#add_more_qualifications" ).hide();
  });

$( "#add_more_qualifications_2" ).click(function() {
      $( "#qualification_container_3" ).show( "slow", function() { });
      $( "#add_more_qualifications_2" ).hide();
  });


$( "#add_more_occupations_1" ).click(function() {
      $( "#occupation_container_2" ).show( "slow", function() { });
      $( "#add_more_occupations_1" ).hide();
  });

$( "#add_more_occupations_2" ).click(function() {
      $( "#occupation_container_3" ).show( "slow", function() { });
      $( "#add_more_occupations_2" ).hide();
  });



</script>

@stop