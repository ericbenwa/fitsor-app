{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
	<h2 class="form-signin-heading">Sign In</h2>

	<ul>
		@if(Session::has('message'))
		<li>{{ Session::get('message') }}</li>
		@endif
	</ul>

	<div class="form-group">
		{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
	</div>

	<div class="form-group">
		{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
	</div>

	{{ Form::submit('Sign In', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}