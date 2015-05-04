@extends('layouts.main');


@section('content')


<link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" />

<link rel="stylesheet" href="js/chosen/chosen.css" type="text/css" />
<div class="row" style="min-height: 50px;"></div>
    <div class="row">
                    <div class="col-sm-12">
                    {!! Form::open(array('url' => 'foo/bar',  'class'=>'form-horizontal','method' => 'put')) !!}
                            <div class="form-group">
                              {!! Form::label('san', 'Student Application Number (SAN)', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('san', '',['placeholder'=>'Student Application Number (SAN)','class'=>'form-control']); !!}</div>
                            </div>
<div class="form-group">
                            <div class="form-inline">
                                                          {!! Form::label('date_of_birth', 'App Date', array('class' => 'col-sm-3 control-label'));  !!}
                                                         <div class="col-sm-3"> {!! Form::text('date_of_birth', '',['placeholder'=>'App Date','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>


                                                          {!! Form::label('date_of_birth', 'AMS Date', array('class' => 'col-sm-2 control-label'));  !!}
                                                         <div class="col-sm-3"> {!! Form::text('date_of_birth', '',['placeholder'=>'AMS Date','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

                                                        </div>
                                                        </div>

                                                         <section class="panel panel-default">
                                                                                                        <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>


                                                                                                        <div class="panel-body">
<div class="form-group">
                                                                                                        {!! Form::label('nationality', 'Agent Type', array('class' => 'col-sm-3 control-label'));  !!}
                                                                                                                                                                                     <div class="col-sm-9">
                                                                                                                                                                                     <select style="width:260px" class="chosen-select">
                                                                                                                                                                                                                 <optgroup label="Select One">
                                                                                                                                                                                                                     <option value="LAP">LAP</option>

                                                                                                                                                                                                                 </optgroup>
                                                                                                                                                                                                             </select>
                                                                                                                                                                                     </div>

 </div><div class="form-group">


                                                                                                       {!! Form::label('nationality', 'Name', array('class' => 'col-sm-3 control-label'));  !!}
                                                                                                                                                                                    <div class="col-sm-9">
                                                                                                                                                                                    <select style="width:260px" class="chosen-select">
                                                                                                                                                                                                                <optgroup label="Select One">
                                                                                                                                                                                                                    <option value="Bob Dyson">Bob Dyson</option>

                                                                                                                                                                                                                </optgroup>
                                                                                                                                                                                                            </select>
                                                                                                                                                                                    </div>

                                                                                                                                                                                     </div><div class="form-group">
                                                                                                       {!! Form::label('nationality', 'Admssion manager', array('class' => 'col-sm-3 control-label'));  !!}
                                                                                                                                                                                    <div class="col-sm-9
                                                                                                                                                                                    ">
                                                                                                                                                                                    <select style="width:260px" class="chosen-select">
                                                                                                                                                                                                                <optgroup label="Select One">
                                                                                                                                                                                                                    <option value="Bob Dyson">LAP</option>

                                                                                                                                                                                                                </optgroup>
                                                                                                                                                                                                            </select>
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
                                        {!! Form::radio('title', 'Mr.'); !!}
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
                              {!! Form::label('forename_1', 'Initials', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="form-inline">
                              <div class="col-sm-1">{!! Form::text('forename_1', '',['placeholder'=>'','class'=>'form-control']); !!}</div><div class="col-sm-2"></div>
                              <div class="col-sm-1">{!! Form::text('forename_1', '',['placeholder'=>'','class'=>'form-control']); !!}</div><div class="col-sm-2"></div>
                              <div class="col-sm-1">{!! Form::text('forename_1', '',['placeholder'=>'','class'=>'form-control']); !!}</div><div class="col-sm-2"></div>
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
                                        {!! Form::radio('gender', 'Male'); !!}
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
                             <div class="col-sm-9"> {!! Form::text('date_of_birth', '',['placeholder'=>'Date of birth','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

                            </div>
                            <div class="form-group">
                              {!! Form::label('nationality', 'Nationality', array('class' => 'col-sm-3 control-label'));  !!}
                             <div class="col-sm-9">
                             <select style="width:260px" class="chosen-select">
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
                              {!! Form::label('date_of_birth', 'Passport number', array('class' => 'col-sm-3 control-label'));  !!}
                             <div class="col-sm-9"> {!! Form::text('date_of_birth', '',['placeholder'=>'Passport number','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

                            </div>


                        </div>
                      </section>
<section class="panel panel-default">
                        <header class="panel-heading font-bold">CONTACT DETAILS</header>

                        <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Term time</div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="panel-body">
                <div class="form-group">
                      <label class="col-sm-1 control-label">Address</label>
                      <label class="col-sm-2 control-label">Street</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label"></label>
                      <label class="col-sm-2 control-label">Town/City</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label"></label>
                      <label class="col-sm-2 control-label">Post code</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label">Telephone</label>
                      <label class="col-sm-2 control-label">Mobile</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                <div class="form-group">
                      <label class="col-sm-1 control-label"></label>
                      <label class="col-sm-2 control-label">Land line</label>
                      <div class="col-sm-9">
                         <input type="text" class="form-control">
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
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                    <div class="form-group">
                                          <label class="col-sm-1 control-label"></label>
                                          <label class="col-sm-2 control-label">Address line 2</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                    <div class="form-group">
                                          <label class="col-sm-1 control-label"></label>
                                          <label class="col-sm-2 control-label">Town/City</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                    <div class="form-group">
                                          <label class="col-sm-1 control-label"></label>
                                          <label class="col-sm-2 control-label">Post code</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                    <div class="form-group">
                                          <label class="col-sm-1 control-label"></label>
                                          <label class="col-sm-2 control-label">Country</label>
                                          <div class="col-sm-9">
                                                                         <select style="width:260px" class="chosen-select">
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
	<option value="ZW">Zimbabwe</option></optgroup>
                                                                                                     </select>
                                          </div>
                                        </div>
                                    <div class="form-group">
                                          <label class="col-sm-1 control-label">Telephone</label>
                                          <label class="col-sm-2 control-label">Mobile</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>
                                    <div class="form-group">
                                          <label class="col-sm-1 control-label"></label>
                                          <label class="col-sm-2 control-label">Land line</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                          </div>
                                        </div>

                            <div class="form-group">
                              {!! Form::label('forename_3', 'Email ', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('Email_1', '',['placeholder'=>'Email','class'=>'form-control']); !!}</div>
                            </div>
                            <div class="form-group">
                              {!! Form::label('forename_3', 'Alternative Email', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('Email_2', '',['placeholder'=>'Alternative Email','class'=>'form-control']); !!}</div>
                            </div>
<div class="form-group"><div class="line line-dashed b-b line-lg pull-in"></div>
                              {!! Form::label('forename_3', 'Social Accounts', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('Email_2', '',['placeholder'=>'Facebook','class'=>'form-control']); !!}</div>
                            </div>
                        <div class="form-group">
                              {!! Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('Email_2', '',['placeholder'=>'LinkedIn','class'=>'form-control']); !!}</div>
                            </div>
                        <div class="form-group">
                              {!! Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('Email_2', '',['placeholder'=>'Twitter','class'=>'form-control']); !!}</div>
                            </div>
                        <div class="form-group">
                              {!! Form::label('forename_3', ' ', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('Email_2', '',['placeholder'=>'Other','class'=>'form-control']); !!}</div>
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
                                        {!! Form::radio('title', 'Mr.'); !!}
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
                                                          {!! Form::label('forename_3', 'Forename', array('class' => 'col-sm-3 control-label'));  !!}
                                                          <div class="col-sm-9">{!! Form::text('forename_3', '',['placeholder'=>'Forename','class'=>'form-control']); !!}</div>
                                                        </div>
                                                        <div class="form-group">
                                                          {!! Form::label('surname', 'Surname', array('class' => 'col-sm-3 control-label'));  !!}
                                                          <div class="col-sm-9">{!! Form::text('surname', '',['placeholder'=>'Surname','class'=>'form-control']); !!}</div>
                                                        </div>
                            <div class="form-group">
                                                  <label class="col-sm-3 control-label">Telephone</label>
                                                  <div class="col-sm-9">
                                                     <input type="text" class="form-control">
                                                  </div>
                                                </div>

                                                 </div>

                                                   <div class="form-group">
                                                                               {!! Form::label('forename_3', 'Email ', array('class' => 'col-sm-3 control-label'));  !!}
                                                                               <div class="col-sm-9">{!! Form::text('Email_1', '',['placeholder'=>'Email','class'=>'form-control']); !!}</div>
                                                                             </div>

                                                                             </section>
                        <section class="panel panel-default">
                                                <header class="panel-heading font-bold">COURSE DETAILS</header>

                                                <div class="panel-body">
                                                 <div class="form-group">
                                                                              {!! Form::label('nationality', 'Course code', array('class' => 'col-sm-3 control-label'));  !!}
                                                                             <div class="col-sm-9">
                                                                             <select style="width:260px" class="chosen-select">
                                                                                                         <optgroup label="Select One">
                                                                                                             <option value="BATTMKN3FLMF">BATTMKN3FLMF</option>

                                                                                                         </optgroup>
                                                                                                     </select>
                                                                             </div>
                                                     </div>
                                                 <div class="form-group">
                                                                              {!! Form::label('nationality', 'Awarding Body', array('class' => 'col-sm-3 control-label'));  !!}
                                                                             <div class="col-sm-9">
                                                                             <select style="width:260px" class="chosen-select">
                                                                                                         <optgroup label="Select One">
                                                                                                             <option value="ARU">ARU</option>

                                                                                                         </optgroup>
                                                                                                     </select>
                                                                             </div>
                                                     </div>
                                                 <div class="form-group">
                                                                              {!! Form::label('nationality', 'Course Name', array('class' => 'col-sm-3 control-label'));  !!}
                                                                             <div class="col-sm-9">
                                                                             <select style="width:260px" class="chosen-select">
                                                                                                         <optgroup label="Select One">
                                                                                                             <option value="MA in Marketing">MA in Marketing</option>

                                                                                                         </optgroup>
                                                                                                     </select>
                                                                             </div></div>
<div class="form-inline">
<div class="col-sm-3"></div><div class="col-sm-9">
                                                                             <div class="checkbox i-checks">
                                                                                                       <label>
                                                                                                         <input type="checkbox" value="" checked="">
                                                                                                         <i></i>
                                                                                                         Top - Up
                                                                                                       </label>
                                                                                                     </div>
                                                                                                     <div class="checkbox i-checks">
                                                                                                                               <label>
                                                                                                                                 <input type="checkbox" value="" checked="">
                                                                                                                                 <i></i>
                                                                                                                                 Advanced Entry
                                                                                                                               </label>
                                                                                                                             </div>
                                                     </div>

                                                </div></div>

                            <div class="form-group">
                              {!! Form::label('date_of_birth', 'Intake', array('class' => 'col-sm-3 control-label'));  !!}
                             <div class="col-sm-9"><div class="form-group"><div class="form-inline">
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Jan
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Feb
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Mar
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Apr
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        May
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Jun
                                                      </label>
                                                    </div></div>

                             </div>
                             </div><div class="form-group">
                             <div class="form-inline">

                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Jul
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Aug
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Sep
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Oct
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Nov
                                                      </label>
                                                    </div></div>
                             <div class="col-sm-1"><div class="checkbox i-checks">
                                                      <label>
                                                        <input type="checkbox" value="" checked="">
                                                        <i></i>
                                                        Dec
                                                      </label>
                                                    </div></div>

                             </div></div>

                            </div>
                            </div>

                             <div class="form-group">
                                                            <label class="col-sm-3 control-label">Study mode</label>

                            <div class="col-sm-9">
                                                            <div class="radio-inline i-checks">
                                                                  <label>
                                                                    {!! Form::radio('title', 'Online'); !!}
                                                                    <i></i>
                                                                    Online
                                                                  </label>
                                                            </div>
                                                            <div class="radio-inline i-checks">
                                                              <label>
                                                                {!! Form::radio('title', 'Face to Face'); !!}
                                                                <i></i>
                                                                Face to Face
                                                              </label>
                                                            </div>
                                                            <div class="radio-inline i-checks">
                                                              <label>
                                                                {!! Form::radio('title', 'Blended'); !!}
                                                                <i></i>
                                                                Blended
                                                              </label>
                                                            </div>
                                                        </div>
                                                        </div>
                                                </section>
                        <section class="panel panel-default">
                                                <header class="panel-heading font-bold">EDUCATION QUALIFICATIONS</header>


                                                <div class="panel-body">

                            <div class="form-group">
                              {!! Form::label('forename_1', 'Qualification', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('forename_1', '',['placeholder'=>'Qualification','class'=>'form-control']); !!}</div>
                            </div>
                            <div class="form-group">
                                                          {!! Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  !!}
                                                         <div class="col-sm-9"> {!! Form::text('date_of_birth', '',['placeholder'=>'Start date','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

                                                        </div>
                                                        <div class="form-group">
                                                                                      {!! Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  !!}
                                                                                     <div class="col-sm-9"> {!! Form::text('date_of_birth', '',['placeholder'=>'End date','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

                                                                                    </div>
                                                                                     <div class="form-group">
                                                                                                                  {!! Form::label('forename_1', 'Grade', array('class' => 'col-sm-3 control-label'));  !!}
                                                                                                                  <div class="col-sm-9">{!! Form::text('forename_1', '',['placeholder'=>'Pass','class'=>'form-control']); !!}</div>
                                                                                                                </div>
                                                                                     <div class="form-group">

                                                                                                                  <div class="col-sm-3"></div>
                                                                                                                  <div class="col-sm-9"><p>
                                                                                                                                        		                <a href="#" class="btn btn-default btn-sm">Add More Qualifications</a>
                                                                                                                                        		              </p></div>
                                                                                                                </div>




                                                </div>

                                                </section>
                        <section class="panel panel-default">
                                                <header class="panel-heading font-bold">WORK EXPERIENCE</header>

                                                <div class="panel-body">
                                                   <div class="form-group">
                                                                              {!! Form::label('forename_1', 'Position', array('class' => 'col-sm-3 control-label'));  !!}
                                                                              <div class="col-sm-9">{!! Form::text('forename_1', '',['placeholder'=>'Position','class'=>'form-control']); !!}</div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                                          {!! Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  !!}
                                                                                                         <div class="col-sm-9"> {!! Form::text('date_of_birth', '',['placeholder'=>'Start date','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                                                      {!! Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  !!}
                                                                                                                                     <div class="col-sm-9"> {!! Form::text('date_of_birth', '',['placeholder'=>'End date','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

                                                                                                                                    </div>
                                                                                                                                    <div class="form-inline">
                                                                                                                                    <div class="col-sm-3"></div><div class="col-sm-9">
                                                                                                                                                                                                                 <div class="checkbox i-checks">
                                                                                                                                                                                                                                           <label>
                                                                                                                                                                                                                                             <input type="checkbox" value="" checked="">
                                                                                                                                                                                                                                             <i></i>
                                                                                                                                                                                                                                             Currently working
                                                                                                                                                                                                                                           </label>
                                                                                                                                                                                                                                         </div>

                                                                                                                                                                                         </div>

                                                                                                                                                                                    </div>

                                                </div>
                                                </section>
                        <section class="panel panel-default">
                                                <header class="panel-heading font-bold">PAYMENT INFORMATION</header>

                                                <div class="panel-body">

                                                <div class="form-group">
                                                 {!! Form::label('date_of_birth', 'Course fees', array('class' => 'col-sm-3 control-label'));  !!}<div class="col-sm-9 "><div class="form-inline">
                                                <div class="col-sm-3 ">
                                                                                                                             <div class="checkbox i-checks">
                                                                                                                                                       <label>
                                                                                                                                                         <input type="checkbox" value="" checked="">
                                                                                                                                                         <i></i>
                                                                                                                                                         Self funded
                                                                                                                                                       </label>
                                                                                                                                                     </div></div>
                                                                                                                                                     <div class="col-sm-4 ">
                                                                                                                                                     <div class="checkbox i-checks">
                                                                                                                                                                               <label>
                                                                                                                                                                                 <input type="checkbox" value="" checked="">
                                                                                                                                                                                 <i></i>
                                                                                                                                                                                 Sponsored by the Company
                                                                                                                                                                               </label>
                                                                                                                                                                             </div>
                                                                                                                                                                             </div>

<div class="col-sm-2 ">
                                                                                                  <div class="checkbox i-checks">
                                                                                                                                    <label>
                                                                                                                                      <input type="checkbox" value="" checked="">
                                                                                                                                      <i></i>
                                                                                                                                      Bank Loan
                                                                                                                                    </label>
                                                                                                                                  </div>
                                                                                                                                  </div>
                                                                                                                                  </div>
                                                                                                     </div>

                                                                                                </div>


 <div class="form-group">
		{!! Form::label('forename_3', 'Total fee', array('class' => 'col-sm-3 control-label'));  !!}
		<div class="col-sm-9">{!! Form::text('Email_2', '',['placeholder'=>'Total fee','class'=>'form-control']); !!}</div>
	  </div>

<div class="line line-dashed b-b line-lg pull-in"></div>
	  <div class="form-inline">
		{!! Form::label('forename_3', 'Deposit', array('class' => 'col-sm-1 control-label'));  !!}
		<div class="col-sm-2">{!! Form::text('Email_2', '',['placeholder'=>'Deposit','class'=>'form-control']); !!}</div>


		{!! Form::label('date_of_birth', 'Date', array('class' => 'col-sm-2 control-label'));  !!}
	 <div class="col-sm-2"> {!! Form::text('date_of_birth', '',['placeholder'=>'Date','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

 {!! Form::label('nationality', 'Method of payment', array('class' => 'col-sm-3 control-label'));  !!}
                                                                             <div class="col-sm-2">
                                                                             <select style="width:145px" class="chosen-select">
                                                                                                         <optgroup label="Select One">
                                                                                                             <option value="BACS">BACS</option>

                                                                                                         </optgroup>
                                                                                                     </select>
                                                                             </div>

                                                                         <div class="line line-dashed b-b line-lg pull-in"></div>


	  </div>






                                                </div>
                                                </section>

                        <section class="panel panel-default">
                                                <header class="panel-heading font-bold">BQu only</header>


                                                <div class="panel-body">                              <div class="form-group">
                                                                        {!! Form::label('date_of_birth', 'Application received date', array('class' => 'col-sm-2 control-label'));  !!}
                                                                        <div class="col-sm-6"> {!! Form::text('date_of_birth', '',['placeholder'=>'Application received date','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

                                                                        </div>
                                                </div>


                                                </section>


                      {!! Form::close() !!}
                    </div>

                  </div>

@stop