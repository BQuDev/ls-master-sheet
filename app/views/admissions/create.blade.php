@extends('layouts.main')

@section('content')
   <form action="" class="box validate">

   					<div class="header">

   					</div>

   					<div class="content">

                       <div class="row">
   						<label>
   							<strong>Title</strong>
   						</label>
   						<div>

                           <div class="row">
   							<p class="_25">
   								<label for="f4_rb1">Mr</label>
   								<input type="radio" name="f4_rb" id="f4_rb1" value="Mr">
   							</p>
   							<p class="_25">
   							<label for="f4_rb2">Mrs</label>
   								<input type="radio" name="f4_rb" id="f4_rb2" value="Mrs">
   							</p>
   							<p class="_25">
   								<label for="f4_rb4">Ms</label>
   								<input type="radio" name="f4_rb" id="f4_rb4" value="Ms">
   							</p>
   							<p class="_25">
   							<label for="f4_rb6">Other</label>
   							<input type="radio" name="f4_rb" id="f4_rb6" value="Other">
   							</p>


   						</div>


   						</div>
   					</div>

   						<div class="row">
   							<label for="v1_normal_input">
   								<strong>First Name</strong>
   							</label>
   							<div>
   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>

                           <div class="row">
   							<label for="v1_normal_input">
   								<strong>Name 2</strong>
   							</label>
   							<div>
   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>
                           <div class="row">
   							<label for="v1_normal_input">
   								<strong>Surname</strong>
   							</label>
   							<div>

   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>
                           <div class="row">
   						<label for="f1_textarea_grow">
   							<strong>Address (UK)</strong>

   						</label>
   						<div>
   							<div class="row">
   							<label for="v1_normal_input">
   								<strong>Street</strong>
   							</label>
   							<div>

   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>
                           <div class="row">
   							<label for="v1_normal_input">
   								<strong>City</strong>
   							</label>
   							<div>

   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>
                           <div class="row">
   							<label for="v1_normal_input">
   								<strong>Post code</strong>
   							</label>
   							<div>

   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>

   						</div>
   					</div>
                       <div class="row">
   							<label for="v2_select">
   								<strong>Nationality</strong>
   							</label>
   							<div>
   								<select name=v2_select id=v2_select class="search required" data-placeholder="Choose a Name">
   									<option value=""></option>
   									<option value="Oliver">Oliver</option>
   									<option value="Jack">Jack</option>
   									<option value="Harry">Harry</option>
   									<option value="Alfie">Alfie</option>
   									<option value="Charlie">Charlie</option>
   									<option value="Thomas">Thomas</option>
   									<option value="William">William</option>
   									<option value="Joshua">Joshua</option>
   									<option value="George">George</option>
   									<option value="James">James</option>
   									<option value="Olivia">Olivia</option>
   									<option value="Sophie">Sophie</option>
   									<option value="Emily">Emily</option>
   									<option value="Lily">Lily</option>
   									<option value="Amelia">Amelia</option>
   									<option value="Jessica">Jessica</option>
   									<option value="Ruby">Ruby</option>
   									<option value="Chloe">Chloe</option>
   									<option value="Grace">Grace</option>
   									<option value="Evie">Evie</option>
   								</select>
   							</div>
   						</div>
                       <div class="row">
   						<label for="f1_textarea_grow">
   							<strong>Country of origin</strong>

   						</label>
   						<div>
   							<div class="row">
   							<label for="v1_normal_input">
   								<strong>Street</strong>
   							</label>
   							<div>

   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>
                           <div class="row">
   							<label for="v1_normal_input">
   								<strong>City</strong>
   							</label>
   							<div>

   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>
                           <div class="row">
   							<label for="v1_normal_input">
   								<strong>Post code</strong>
   							</label>
   							<div>

   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>
                           <div class="row">
   							<label for="v1_normal_input">
   								<strong>Country</strong>
   							</label>
   							<div>

   								<input class="required" type="text" name=v1_normal_input id=v1_normal_input />
   							</div>
   						</div>
   						</div>
   					</div>
                       <div class="row">
   							<label for="f8_mi_date">
   								<strong>Date Of Birth</strong>

   							</label>
   							<div>
   								<input data-error-type=inline class="maskDate" name=f8_mi_date id=f8_mi_date type=text />
   							</div>
   						</div>
                           <div class="row">
   							<label >
   								<strong>Telephone</strong>

   							</label>
   							<div>
   								<div class="row">
   							<label for="f8_mi_intphone">
   								<strong>Mobile</strong>

   							</label>
   							<div>
   								<input class="maskIntPhone" name=f8_mi_intphone id=f8_mi_intphone type=text />
   							</div>
   						</div>
                           <div class="row">
   							<label for="f9_mi_intphone">
   								<strong>Landline</strong>

   							</label>
   							<div>
   								<input class="maskIntPhone" name=f9_mi_intphone id=f9_mi_intphone type=text />
   							</div>
   						</div>
   							</div>
   						</div>
                           <div class="row">
   							<label for="v1_email">
   								<strong>Email Address</strong>
   							</label>
   							<div>
   								<input class="required" email=true type="text" name=v1_email id=v1_email value="wrong@email" />
   							</div>
   						</div>

                           <div class="row">
   							<label for="v1_email">
   								<strong>Social Accounts</strong>
   							</label>
   							<div>
   							 <div class="row">
   							<p class="_50">
   								<label>Facebook</label>
   								<input type="text" />
   							</p>
   							<p class="_50">
   								<label>Twitter</label>
   								<input type="text" />
   							</p>
   						</div>

                           <div class="row">
   							<p class="_50">
   								<label>Linkedin</label>
   								<input type="text" />
   							</p>
   							<p class="_50">
   								<label>Other</label>
   								<input type="text" />
   							</p>
   						</div>
   							</div>
   						</div>
   					</div><!-- End of .content -->

   					<div class="actions">
   						<div class="left">
   							<input type="reset" value="Cancel" />
   						</div>
   						<div class="right">
   							<input type="submit" value="Submit" name=submit />
   						</div>
   					</div><!-- End of .actions -->

   				</form><!-- End of .box -->
@stop