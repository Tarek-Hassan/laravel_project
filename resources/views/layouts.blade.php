<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="img/eye.ico">
	@yield ('title')
	<link rel="stylesheet" href="">
</head>
<body>

	<h1>@yield ('title')</h1>		
	
	<div>
		@yield ('content')
	</div>
	
</body>
</html>