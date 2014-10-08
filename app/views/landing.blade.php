@extends('html.landing_html')
@section('login')
    <div class="login">
    <div class="page-header">
    	<h2>Log In</h2>
    </div>
      <form method="post" action="/login" accept-charset="UTF-8">
            <div style="margin: 2em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                       <input id="email" name="email" type="email" class="form-control" placeholder="Email">
                       </div>
                       <div style="margin: 2em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                       <input id="password" name="password" type="password" class="form-control" placeholder=Password>
            </div>
             <h4>No account? Click to <small><a>{{ HTML::link('register', 'Register') }}</a></small></h4>
            <input class="btn btn-primary btn-lg center-block" type="submit" id="sign-in" value="Log In">
      </form>
    </div>
@stop