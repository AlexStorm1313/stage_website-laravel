@extends('html.home_html')
@section('navigation')
<ul class="nav nav-tabs" role="tablist">
             <li class="link-home"><a href="home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
             @if( Auth::user()->role == 'Admin')<li class="link-home active"><a  href="users"><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
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
    <thead>
    <h2>Waiting for activation</h2>
        <tr>
            <th>First Name</th>
            <th>infix</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Explaination</th>
            <th>Activate</th>
        </tr>
    </thead>
    <tbody>
    @foreach($registers as $register)
        <tr>
            <td>{{ $register->fname }}</td>
            <td>{{ $register->infix }}</td>
            <td>{{ $register->sname }}</td>
            <td>{{ $register->email }}</td>
            <td>{{ $register->company }}</td>
            <td>{{ $register->explain }}</td>
            <td>{{ $register->active }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<table class="table table-striped">
 <h2>Users with access</h2>
    <thead>
        <tr>
            <th>First Name</th>
            <th>infix</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Company</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->fname }}</td>
            <td>{{ $user->infix }}</td>
            <td>{{ $user->sname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->company }}</td>
            <td>{{ $user->active }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

@stop