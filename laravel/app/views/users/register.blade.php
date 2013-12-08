{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
	<h2 class="form-signup-heading">Create Account</h2>

	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>

	<!-- {{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }} -->
	<!-- {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }} -->
	<div class="form-group">
		{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
	</div>

	<div class="form-group">
		{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
	</div>

	<div class="form-group">
		{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
	</div>

	{{ Form::submit('Create Account', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}