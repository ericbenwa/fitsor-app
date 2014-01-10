<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Fitsor :: </title>
	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/main.css')}}
</head>

<body>

	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-inner">
			<div class="container">
				<ul class="nav navbar-nav">
					<li><a href="#">Fitsor</a></li>
					@if(!Auth::check())
					<li>{{ HTML::link('users/register', 'Get Started') }}</li>   
					<li>{{ HTML::link('users/login', 'Sign In') }}</li>
					@else
					<li>{{ HTML::link('users/dashboard', 'Dashboard') }}</li>
					<li>{{ HTML::link('users/profile', 'My Profile') }}</li>
					<li>{{ HTML::link('users/logout', 'Log Out') }}</li>
					@endif
					<li><a href="mailto:hello@fitsor.com?subject=Feedback">Feedback</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<!-- @if(Session::has('message'))
		<p class="alert">{{ Session::get('message') }}</p>
		@endif -->

		{{ $content }}
	</div>

</body>
</html>