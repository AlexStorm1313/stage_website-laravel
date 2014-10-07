@extends('html.landing_html')
@section('login')
    <div class="login">
    <h2>Log In</h2>
      <form method="post" action="login" accept-charset="UTF-8">
            <div style="margin: 2em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                       <input type="email" class="form-control" placeholder="Email">
                       </div>
                       <div style="margin: 2em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                       <input type="password" class="form-control" placeholder=Password>
            </div>
            <input class="btn btn-primary btn-lg center-block" type="submit" id="sign-in" value="Sign In">
      </form>
    </div>
@stop