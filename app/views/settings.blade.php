@extends('html.home_html')
@section('navigation')
<ul class="nav nav-tabs" role="tablist">
             <li class="link-home active"><a href="home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
             @if( Auth::user()->role == 'Admin')<li class="link-home"><a  href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
             <li class="link-home"><a href="logs"><span class="glyphicon glyphicon-list"></span> Logs</a></li>
             <li class="link-home"><a href="documents"><span class="glyphicon glyphicon-file"></span> Documents</a></li>
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
<div class="edit_user">
<h2>Edit your profile <small><a>{{ HTML::link('users', 'Back') }}</a></small></h2>
{{ Form::model(Auth::user(), ['method'=>'PATCH', 'route' => ['update_profile', Auth::user()->id]])  }}
        <div style="margin: 0 2em 2em;" class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           {{ Form::text('fname', null, array('class' => 'form-control')) }}
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           {{ Form::text('infix', null, array('class' => 'form-control')) }}
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           {{ Form::text('sname', null, array('class' => 'form-control')) }}
        </div>
        <div style="margin: 0 2em 2em;" class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
           {{ Form::email('email', null, array('class' => 'form-control')) }}
        </div>
        <div style="margin: 0 2em 2em;" class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
           {{ Form::text('company', null, array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Save', array('class' => 'btn btn-primary btn-lg center-block')) }}
{{ Form::close() }}
</div>
@stop
