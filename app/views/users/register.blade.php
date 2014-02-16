@extends('layouts/global')

@section('content')
{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
<!-- Need to udpate this form call once debug insert sql error -->

	<h2>Create Account</h2>

	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>

	<div class="form-group">
		<input class="form-control" name="firstname" placeholder="First Name">
	</div>
	<div class="form-group">
		<input class="form-control" name="lastname" placeholder="Last Name">
	</div>

	<div class="form-group">
		<input class="form-control" name="email" placeholder="Email">
	</div>

	<div class="form-group">
		<input class="form-control" name="password" placeholder="Password">
	</div>

	<div class="form-group">
		<input class="form-control" name="password_confirmation" placeholder="Confirm Password">
	</div>

	<input class="btn btn-large btn-primary btn-block" value="Create Account" type="submit">
</form>
@endsection