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

	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Fitsor</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			@if(!Auth::check())
			<li>{{ HTML::link('about', 'About') }}</li>
			<li>{{ HTML::link('users/register', 'Get Started') }}</li>   
			<li>{{ HTML::link('users/login', 'Sign In') }}</li>
			@else
			<li>{{ HTML::link('users/dashboard', 'Dashboard') }}</li>
			<li>{{ HTML::link('users/profile', 'My Profile') }}</li>
			<li>{{ HTML::link('users/logout', 'Log Out') }}</li>
			@endif
			<li><a href="mailto:hello@fitsor.com?subject=Feedback">Feedback</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div class="container">
		{{ $content }}
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    {{ HTML::script('https://code.jquery.com/jquery-1.10.2.min.js')}}
    {{ HTML::script('packages/bootstrap/js/bootstrap.min.js')}}

</body>
</html>