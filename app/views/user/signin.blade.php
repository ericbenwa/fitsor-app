@extends('layouts/global')

@section('content')
<form action="{{ action('UsersController@postSignin') }}" method="POST" class="form-signin">
	{{ Form::token() }}

	<h2>Sign In</h2>

	<ul>
		@if(Session::has('message'))
		<li>{{ Session::get('message') }}</li>
		@endif
	</ul>

	<div class="form-group">
		<input class="form-control" name="email" placeholder="Email">
	</div>

	<div class="form-group">
		<input class="form-control" name="password" placeholder="Password">
	</div>

	<input class="btn btn-large btn-primary btn-block" value="Sign In" type="submit">
</form>
@endsection