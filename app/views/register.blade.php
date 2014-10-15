@extends('html.register_html')
@section('register')
          @if($errors->all())
          <script>
          $(function() {
          $('.register').addClass('animated shake');
          });
          </script>
          @endif
          {{ Form::open(array('autocomplete' => 'off')) }}
          <div class="register">
          <div class="page-header">
          	<h2>Register</h2>
          </div>
           @foreach ($errors->all() as $error)
                      <div class="error">{{ $error }}</div>
                      @endforeach
                 <div style="margin: 1em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                       <input id="fname" name="fname" type="text" class="form-control" placeholder="First name">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                       <input id="infix" name="infix" type="text" class="form-control" placeholder="Infix">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                       <input id="sname" name="sname" type="text" class="form-control" placeholder="Surname">
                       </div>
                       <div style="margin: 1em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                       <input id="email" name="email" type="email" class="form-control" placeholder="Email">
                       </div>
                       <div style="margin: 1em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
                       <input id="company" name="company" type="text" class="form-control" placeholder="Company or Organization">
                       </div>
                       <div style="margin: 1em; height: 5em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
                       <textarea style="height: 5em;" id="explain" name="explain" class="form-control" placeholder="Please explain briefly why you want access."></textarea>
                       </div>
             <h4>Already have an account <small><a>{{ HTML::link('login', 'Log In ') }}</a></small></h4>
             {{ Form::submit('Register', array('class' => 'btn btn-primary btn-lg center-block')) }}
          {{ Form::close() }}
    </div>
@stop