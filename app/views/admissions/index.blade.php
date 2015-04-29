


@extends('layouts.main')

@section('content')


<br><br>
<div class="box">

					<div class="header">
						<h2>Admissions</h2>
					</div>

					<div class="content">

						<table class="dynamic styled"  id="dataTablesAdmissions" data-filter-Bar="always" data-table-tools='{"display":false}'>
							<thead>
						 <tr>
                                                  <th>#</th>
                                                  <th>Name</th>
                                                  <th>Email</th>
                                                  <th>Mobile</th>
                                                  <th>Country</th>
                                                  <th>Action</th>
                                              </tr>
                                          </thead>
                                          <tbody>

                                              @foreach ($admissions as $admission)
                                              <tr>
                                                 <td>{{ $admission->id }}</td>
                                                 <td>{{ $admission->name }}</td>
                                                 <td>{{ $admission->email }}</td>
                                                 <td>{{ $admission->mobile }}</td>
                                                 <td>{{ $admission->country }}</td>
                                                 <td>Actions</td>
                                                 </tr>
                                              @endforeach



							</tbody>
						</table>

					</div><!-- End of .content -->

				</div><!-- End of .box -->

@stop


@section('script')



@stop