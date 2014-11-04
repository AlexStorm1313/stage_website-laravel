@extends('html.home_html')
@section('navigation')
<ul class="nav nav-tabs" role="tablist">
             <li class="link-home"><a href="home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
             @if( Auth::user()->role == 'Admin')<li class="link-home active"><a  href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
             @if( Auth::user()->role == 'Stagiair')<li class="link-home active"><a  href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
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
<table class="table table-striped">
 <h2>Users</h2>
    <thead>
        <tr>
            <th><span class="glyphicon glyphicon-user"></span> First Name</th>
            <th><span class="glyphicon glyphicon-user"></span> Infix</th>
            <th><span class="glyphicon glyphicon-user"></span> Last Name</th>
            <th><span class="glyphicon glyphicon-envelope"></span> Email</th>
            <th><span class="glyphicon glyphicon-lock"></span> Password</th>
            <th><span class="glyphicon glyphicon-tag"></span> Company</th>
            <th><span class="glyphicon glyphicon-filter"></span> Status</th>
            <th><span class="glyphicon glyphicon-user"></span> Role</th>
            <th><span class="glyphicon glyphicon-user"></span> Edit</th>
            <th><span class="glyphicon glyphicon-remove"></span> Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    @if($user != Auth::User() && $user->role !== 'Admin')
        <tr>
            <td>{{ $user->fname }}</td>
            <td>{{ $user->infix }}</td>
            <td>{{ $user->sname }}</td>
            <td>{{ $user->email }}</td>
            @if($user->password == null)
                <td>No password</td>
            @else
            <td>Has password</td>
            @endif
            <td>{{ $user->company }}</td>
             @if($user->active == true)
             <td>Acitive</td>
             @elseif($user->active == false)
             <td>Suspended</td>
             @endif
            <td>{{ $user->role }}</td>
            <td><a href="{{ URL::action('UsersController@edit', [$user->id]);}}"><button class="btn btn-primary btn-xs">Edit</button></a></td>
            <td><a href="{{ URL::action('UsersController@destroy', [$user->id]);}}"><button class="btn btn-primary btn-xs">Delete</button></a></td>
        </tr>
        @endif
    @endforeach
    </tbody>
</table>
@stop
@section('message')
@if(Session::has('message_updated'))
<div class="alert alert-success alert-dismissible animated fadeInUp" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Success</strong> {{ Session::get('message_updated') }}
</div>
@endif
@if(Session::has('dirty'))
<div class="alert alert-alert alert-dismissible animated fadeInUp" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Success</strong> {{ Session::get('dirty') }}
</div>@endif
@stop