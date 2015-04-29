


@extends('layouts.main')

@section('content')


<div class="box">

					<div class="header">
						<h2>Admissions</h2>
					</div>

					<div class="content">

						<table class="dynamic styled"  id="dataTablesAdmissions" data-filter-Bar="always" data-table-tools='{"display":false}'>
							<thead>
						 <tr>
                                                  <th>Student ID</th>
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
                                                 <td>{{ $admission->student_id }}</td>
                                                 <td>{{ $admission->first_name }}</td>
                                                 <td>{{ $admission->email }}</td>
                                                 <td>{{ $admission->mobile }}</td>
                                                 <td>{{ $admission->origin_country }}</td>
                                                 <td>
                                                    <a href="{{ URL::to('/').'/admissions/'.$admission->id.'/edit' }}"><input type="button" class="badge block green" value="Update"/></a>
                                                    {{ Form::open(array('route' => array('admissions.destroy', $admission->id), 'method' => 'delete')) }}
                                                            <button type="submit" class="badge block red">Delete</button>
                                                    {{ Form::close() }}

                                                 </td>
                                                 </tr>
                                              @endforeach


							</tbody>
						</table>

					</div><!-- End of .content -->

				</div><!-- End of .box -->

@stop


@section('script')



@stop