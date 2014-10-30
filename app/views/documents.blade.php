@extends('html.home_html')
@section('navigation')
<ul class="nav nav-tabs" role="tablist">
             <li class="link-home"><a href="home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
             @if( Auth::user()->role == 'Admin')<li class="link-home"><a  href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
             @if( Auth::user()->role == 'Stagiair')<li class="link-home"><a  href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
             <li class="link-home"><a href="logs"><span class="glyphicon glyphicon-list"></span> Logs</a></li>
             <li class="link-home active"><a href="documents"><span class="glyphicon glyphicon-file"></span> Documents</a></li>
              <li class="active dropdown navbar-right link-login">
                 <a class=dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->fname; }} {{ Auth::user()->infix; }} {{ Auth::user()->sname; }} <span class="caret"></span>
                 </a>
                 <ul class="dropdown-menu" role="menu">
                    <li><a><span class="glyphicon glyphicon-envelope"></span> {{ Auth::user()->email; }}</a></li>
                    <li class="divider"></li>
                    <li><a href="settings"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>
                 </ul>
               </li>
    </ul>
    @stop

@section('content')
<div class="container">
{{ Form::open(array('method'=>'POST', 'action' => 'FileController@store', 'files' => true)) }}
{{ Form::text('filename') }}
{{ Form::file('document') }}
{{ Form::submit('Upload', array('class' => 'btn btn-primary btn-lg center-block')) }}
{{ Form::close() }}
</div>
@stop
@section('message')
@if(Session::has('message_uploaded'))
<div class="alert alert-success alert-dismissible animated fadeInUp" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Success</strong> {{ Session::get('message_uploaded') }}
</div>
@endif
@if(Session::has('message_uploaded_failed'))
<div class="alert alert-danger alert-dismissible animated fadeInUp" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Failed!</strong> {{ Session::get('message_uploaded_failed') }}
</div>@endif
@stop
