@extends('layouts/global')

@section('content')
<form action="{{ action('UsersController@postUpdate') }}" method="POST" class="form-signup">
	{{ Form::token() }}

	<h1>{{ $user->firstname }} {{ $user->lastname }}'s Profile</h1>

	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>

	<div class="form-group">
		<input class="form-control" name="firstname" value="{{ $user->firstname }}" placeholder="First Name">
	</div>
	<div class="form-group">
		<input class="form-control" name="lastname" value="{{ $user->lastname }}" placeholder="Last Name">
	</div>

	<div class="form-group">
		<input class="form-control" name="email" value="{{ $user->email }}" placeholder="Email">
	</div>

	<input class="btn btn-large btn-primary btn-block" type="submit" value="Update Profile">
</form>
@endsection