@extends('html.home_html')

@section('header')
   <div class="animated fadeInDown jumbotron">
         <h1 class="animated fadeInUp">Stage van Alex Brasser</h1>
         <p class="animated fadeInUp">Uren registratie van Alex Brasser</p>
   </div>
@stop
@section('navigation')
   <ul class="nav nav-tabs" role="tablist">
         <li class="active link-home"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
         <li class="dropdown navbar-right link-login">
             <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-user"></span>$user<b class="caret"></b></a>
                <ul class="dropdown-menu">
                     $name
                     $email
                     $other shizzle
                     Settings
                     Log Out
                </ul>
          </li>
   </ul>
@stop
@section('content')
<h1>Welkom $user</h1>
{{ $password = DB::table('users')->where('fname', 'Alex')->pluck('password'); }}<br>
{{ $password = DB::table('users')->where('fname', 'Jan')->pluck('password'); }}<br>
{{ $session_id = Session::getId(); }}
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