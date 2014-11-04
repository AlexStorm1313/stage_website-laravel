@extends('html.login_html')
@section('login')
    @if($errors->all())
    <script>
    $(function() {
    $('.login').addClass('animated shake');
    });
    </script>
    @endif
    {{ Form::open(array('autocomplete' => 'off')) }}
    <div class="login">
    <div class="page-header">
    	<h2>Log In</h2>
    </div>
            @foreach ($errors->all() as $error)
            <div class="error">{{ $error }}</div>
            @endforeach
            <div style="margin: 0 2em 2em;" class="input-group email">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                 {{ Form::email('email', Input::old('email'), array('placeholder' => 'Email', 'class' => 'form-control')) }}
            </div>
            <div style="margin: 0 2em 2em;" class="input-group password">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                 {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
            </div>
            <h4>No account? Click to <small><a>{{ HTML::link('register', 'Register') }}</a></small></h4>
            {{ Form::submit('Log In', array('class' => 'btn btn-primary btn-lg center-block')) }}
    {{ Form::close() }}
    </div>
@stop