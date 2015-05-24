@extends('layouts.main')


@section('content')
<div class="row">
    <div class="col-lg-12" style="min-height: 10px;">
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
    <section class="panel panel-default">
                   <header class="panel-heading font-bold">User Details</header>
                   <div class="panel-body">
{{ Form::open(array('url' =>URL::to("/").'/users',  'class'=>'form-horizontal','method' => 'post')) }}

                      <div class="form-group">
                        {{ Form::label('first_name', 'First Name', array('class' => 'col-sm-3 control-label'));  }}
                         <div class="col-sm-9">{{ Form::text('first_name', '',['placeholder'=>'First Name','class'=>'form-control']); }}</div>
                      </div>
                      <div class="form-group">
                        {{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-3 control-label'));  }}
                         <div class="col-sm-9">{{ Form::text('last_name','',['placeholder'=>'Last Name','class'=>'form-control']); }}</div>
                      </div>
   <div class="form-group">
                        {{ Form::label('email', 'Email', array('class' => 'col-sm-3 control-label'));  }}
                         <div class="col-sm-9">{{ Form::text('email', '',['placeholder'=>'Email','class'=>'form-control']); }}</div>
                      </div>
                      <div class="form-group">
                        {{ Form::label('password', 'Password', array('class' => 'col-sm-3 control-label'));  }}
                         <div class="col-sm-9">{{ Form::text('password', '',['placeholder'=>'Password','class'=>'form-control']); }}</div>
                      </div>
                      <div class="form-group">
                        {{ Form::label('group', 'Group', array('class' => 'col-sm-3 control-label'));  }}
                         <div class="col-sm-9">{{ Form::select('group',  $groups,'',['class'=>'form-control']);  }}</div>
                      </div>
                      <div class="line line-dashed b-b line-lg pull-in"></div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label"> </label>
                        <div class="col-sm-9">
                        {{ Form::submit('Save', array('class' => 'btn btn-s-md btn-primary')) }}
                        </div>
                     </div>
{{ Form::close() }}

                   </div>
                </section>
    </div>
    <div class="col-lg-6">
    </div>
 </div>
@stop