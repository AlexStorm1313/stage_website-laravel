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
             <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-user"></span> Login<b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <form method="post" action="login" accept-charset="UTF-8">
                    <div style="margin: 5px;" class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div style="margin: 5px;" class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" class="form-control" placeholder=Password>
                    </div>
                        <input style="margin: 5px;" class="btn pull-right btn-primary btn-xs" type="submit" id="sign-in" value="Sign In">
                   </form>
                </ul>
          </li>
   </ul>
@stop
@section('content')
<h1>Welkom $user</h1>
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