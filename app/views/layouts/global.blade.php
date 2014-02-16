<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Fitsor :: A smarter workout tuned for results.</title>

	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/main.css') }}
</head>
<body>
	@include('layouts/nav')

	<div class="container">
		@yield('content')
	</div>

	{{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js') }}
	{{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
</body>
</html>