@extends('html.home_html')
@section('header')
   <div class="animated fadeInDown jumbotron">
         <h1 class="animated fadeInUp">Welkom {{ Auth::user()->fname; }} {{ Auth::user()->infix; }} {{ Auth::user()->sname; }}</h1>
         <p class="animated fadeInUp">U bent een {{ Auth::user()->role; }}</p>
   </div>
@stop
@section('navigation')
   <ul class="nav nav-tabs" role="tablist">
         <li ng-class="{active:panel.isSelected(1)}" class="link-home"><a href ng-click="panel.selectTab(1)"><span class="glyphicon glyphicon-home"></span> Home</a></li>
         @if( Auth::user()->role == 'Admin')<li ng-class="{active:panel.isSelected(2)}" class="link-home"><a ng-click="panel.selectTab(2)" href><span class="glyphicon glyphicon-user"></span> Users</a></li>@endif
         <li ng-class="{active:panel.isSelected(3)}" class="link-home"><a ng-click="panel.selectTab(3)" href><span class="glyphicon glyphicon-list"></span> Logs</a></li>
         <li ng-class="{active:panel.isSelected(4)}" class="link-home"><a ng-click="panel.selectTab(4)" href><span class="glyphicon glyphicon-file"></span> Documents</a></li>
          <li class="active dropdown navbar-right link-login">
             <a class=dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->fname; }} {{ Auth::user()->infix; }} {{ Auth::user()->sname; }} <span class="caret"></span>
             </a>
             <ul class="dropdown-menu" role="menu">
                <li><a><span class="glyphicon glyphicon-envelope"></span> {{ Auth::user()->email; }}</a></li>
                <li><a>{{ Auth::user()->email; }}</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                <li class="divider"></li>
                <li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>
             </ul>
           </li>
   </ul>
@stop
@section('content')
<div ng-show="panel.isSelected(1)" class="home">home</div>
<div ng-show="panel.isSelected(2)" class="users">users</div>
<div ng-show="panel.isSelected(3)" class="logboek">logboek</div>
<div ng-show="panel.isSelected(4)" class="documenten">documenten</div>
@stop
@section('footer')
<div class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
    <span class="navbar-text">
    Copyright &copy;
    <script type="text/javascript">
            var d = new Date()
            document.write(d.getFullYear())
    </script>. Site Designed by <a href="htttp://www.alexbrasser.nl">Alex Brasser</a>. All Rights Reserved.
    </span>
  </div>
</div>
@stop