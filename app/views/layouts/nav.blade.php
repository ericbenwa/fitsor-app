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
				<li>{{ HTML::linkAction('MarketingController@getAbout', 'About') }}</li>
				<li>{{ HTML::linkAction('UsersController@postCreate', 'Get Started') }}</li>  
				<li>{{ HTML::linkAction('UsersController@getSignin', 'Sign In') }}</li>
				@else
				<li>{{ HTML::linkAction('DashboardController@getIndex', 'Dashboard') }}</li>
				<li>{{ HTML::linkAction('UsersController@getProfile', 'Profile') }}</li>
				<li>{{ HTML::linkAction('UsersController@getSignout', 'Sign Out') }}</li>
				@endif
				<li><a href="mailto:hello@fitsor.com?subject=Feedback">Feedback</a></li>
			</ul>
		</div>
	</div>
</div>