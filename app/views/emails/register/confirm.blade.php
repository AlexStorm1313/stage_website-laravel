<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
	    <h1 style="color: #28AD93;">Welcome <small style="color:darkgray">{{ $fname }} {{ $infix }} {{ $sname }}.</small></h1>
	    <p>Please click <a href>{{ URL::to('activate',array($id, $token)) }}</a> link to confirm your registration.</p>
    </div>
	</body>
</html>
