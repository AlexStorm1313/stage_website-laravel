@extends('html.register_html')
@section('register')
 <div class="register">
    <h2>Register</h2>
      <form method="post" action="register" accept-charset="UTF-8">
                       <div style="margin: 1em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                       <input type="text" class="form-control" placeholder="First name">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                       <input type="text" class="form-control" placeholder="Surname">
                       </div>
                       <div style="margin: 1em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                       <input type="email" class="form-control" placeholder="Email">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                       <input type="email" class="form-control" placeholder="Repeat Email">
                       </div>
                       <div style="margin: 1em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                       <input type="password" class="form-control" placeholder="Password">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                       <input type="password" class="form-control" placeholder="Password">
                       </div>
                       <div style="margin: 1em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
                       <input type="text" class="form-control" placeholder="Company or Organization">
                       </div>
                       <div style="margin: 1em; height: 5em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
                       <textarea style="height: 5em;" type="text" class="form-control" placeholder="Please explain briefly why you want acces."></textarea>
                       </div>
             <h4>Already have an account <small><a>{{ HTML::link('/', 'Log In ') }}</a></small></h4>
            <input class="btn btn-primary btn-lg center-block" type="submit" id="sign-in" value="Register">
      </form>
    </div>
@stop