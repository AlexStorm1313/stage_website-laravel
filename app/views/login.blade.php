@extends('html.login_html')
@section('login')
    {{ Form::open(array('autocomplete' => 'off')) }}
    <div class="login">
    <div class="page-header">
    	<h2>Log In</h2>
    </div>
    {{ $errors->first('email') }}
    			{{ $errors->first('password') }}
            <div style="margin: 2em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                 {{ Form::email('email', Input::old('email'), array('placeholder' => 'Email', 'class' => 'form-control')) }}
            </div>
            <div style="margin: 2em;" class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                 {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
            </div>
            <h4>No account? Click to <small><a>{{ HTML::link('register', 'Register') }}</a></small></h4>
            {{ Form::submit('Log In', array('class' => 'btn btn-primary btn-lg center-block')) }}
    {{ Form::close() }}
    </div>
@stop