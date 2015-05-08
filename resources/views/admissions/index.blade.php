@extends('layouts.main');
@section('content')


<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="fa fa-ok-sign"></i><strong>Well done!</strong>Application Saved Successfully..
                  </div>

                <br><br>
                  <a href="{!! URL::to('/') !!}" class="btn btn-s-md btn-primary">Add New Application</a>
@stop