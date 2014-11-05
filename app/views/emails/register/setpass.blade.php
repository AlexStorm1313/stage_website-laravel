<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
	    <h1 style="color: #28AD93;">Hello, <small style="color:darkgray">{{ $fname }} {{ $infix }} {{ $sname }}.</small></h1>
	    <p>Please create a password to access your account</p>
	    To set your password, complete this form: {{ URL::to('password/reset',array($id, $token)) }}.<br/>
	    <p>This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.</p>
    </div>
	</body>
</html>
