{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
	<h2>Create Account</h2>

	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>

	<div class="form-group">
		{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
	</div>
	<div class="form-group">
		{{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
	</div>

	<div class="form-group">
		{{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email')) }}
	</div>

	<div class="form-group">
		{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
	</div>

	<div class="form-group">
		{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
	</div>

	<input class="btn btn-large btn-primary btn-block" value="Create Account" type="submit">
</form>