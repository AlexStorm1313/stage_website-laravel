<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
	    <h1 style="color: #28AD93;">Allow acces? To <small style="color:darkgray">{{ $fname }} {{ $infix }} {{ $sname }} from {{ $company }}.</small></h1>
	    <p>{{ $explain }}</p>
	    <p>Click <a href='http://storm.dev:8080/users/{{ $id }}/edit'><button class="btn btn-primary btn-xs">Here</button></a> to Activate the User</p>
    </div>
	</body>
</html>
