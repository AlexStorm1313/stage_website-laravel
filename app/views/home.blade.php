@extends('html.home_html')
@section('header')
   <div class="animated fadeInDown jumbotron">
         <h1 class="animated fadeInUp">Welkom {{ Auth::user()->fname; }} {{ Auth::user()->infix; }} {{ Auth::user()->sname; }}</h1>
         <p class="animated fadeInUp">U bent een {{ Auth::user()->role; }}</p>
   </div>
@stop
@section('navigation')
   <ul class="nav nav-tabs" role="tablist">
         <li class="active link-home"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
         @if( Auth::user()->role == 'Admin')<li class="link-home"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>@endif
          <li class="dropdown navbar-right link-login">
             <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->fname; }} {{ Auth::user()->infix; }} {{ Auth::user()->sname; }} <span class="caret"></span>
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
<h1>Welkom {{ Auth::user()->fname; }} {{ Auth::user()->infix; }} {{ Auth::user()->sname; }}</h1>
{{ Auth::user()->role; }}
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