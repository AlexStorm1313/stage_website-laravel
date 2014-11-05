@extends('html.login_html')
@section('login')
    {{ Form::open($user, ['method'=>'POST', 'route' => ['set_password', in_array('id', $user)]]) }}
    <div class="login">
    <div class="page-header">
    	<h2>Set Password</h2>
    </div>
            <div style="margin: 0 2em 2em;" class="input-group password">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                 {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
            </div>
            <div style="margin: 0 2em 2em;" class="input-group password">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                 {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
            </div>
            {{ Form::submit('Set Password', array('class' => 'btn btn-primary btn-lg center-block')) }}
    {{ Form::close() }}
    </div>
@stop