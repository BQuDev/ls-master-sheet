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
                                                         <div class="col-sm-3"> {!! Form::text('date_of_birth', '',['placeholder'=>'Date of birth','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>


                                                          {!! Form::label('date_of_birth', 'AMS Date', array('class' => 'col-sm-2 control-label'));  !!}
                                                         <div class="col-sm-3"> {!! Form::text('date_of_birth', '',['placeholder'=>'Date of birth','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

                                                        </div>
                                                        </div>
                      <section class="panel panel-default">
                        <header class="panel-heading font-bold">PERSONAL DETAILS</header>
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

                        </div>
                      </section>
<section class="panel panel-default">
                        <header class="panel-heading font-bold">CONTACT DETAILS</header>

                        <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">UK</div>
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
                      <label class="col-sm-2 control-label">City</label>
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
                    <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Country of origin</div>
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
                                          <label class="col-sm-2 control-label">City</label>
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

                            <div class="form-group">
                              {!! Form::label('forename_3', 'Email 1', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('Email_1', '',['placeholder'=>'Forename 3','class'=>'form-control']); !!}</div>
                            </div>
                            <div class="form-group">
                              {!! Form::label('forename_3', 'Email 2', array('class' => 'col-sm-3 control-label'));  !!}
                              <div class="col-sm-9">{!! Form::text('Email_2', '',['placeholder'=>'Forename 3','class'=>'form-control']); !!}</div>
                            </div>

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
                              {!! Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  !!}
                             <div class="col-sm-9"> {!! Form::text('date_of_birth', '',['placeholder'=>'Date of birth','class'=>'datepicker-input form-control','data-date-format'=>'dd-mm-yyyy']); !!}</div>

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
                                                <header class="panel-heading font-bold">AGENT INFORMATION</header>


                                                <div class="panel-body">

                                                {!! Form::label('nationality', 'Name', array('class' => 'col-sm-1 control-label'));  !!}
                                                                                                                             <div class="col-sm-4">
                                                                                                                             <select style="width:260px" class="chosen-select">
                                                                                                                                                         <optgroup label="Select One">
                                                                                                                                                             <option value="LAP">LAP</option>

                                                                                                                                                         </optgroup>
                                                                                                                                                     </select>
                                                                                                                             </div>




                                               {!! Form::label('nationality', 'Name', array('class' => 'col-sm-1 control-label'));  !!}
                                                                                                                            <div class="col-sm-4">
                                                                                                                            <select style="width:260px" class="chosen-select">
                                                                                                                                                        <optgroup label="Select One">
                                                                                                                                                            <option value="Bob Dyson">Bob Dyson</option>

                                                                                                                                                        </optgroup>
                                                                                                                                                    </select>
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