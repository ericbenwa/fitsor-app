<h1>Profile</h1>

<p>{{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</p>

<p>{{ Auth::user()->email}}</p>


<ul>
	@foreach(ExerciseType::all() as $error)
	<li>{{ var_dump($error) }}</li>
	@endforeach
</ul>


{{ Form::open(array('action'=>'UsersController@postUpdate', 'class'=>'form-update')) }}
	<h2 class="form-signup-heading">Create Account</h2>

	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>

	<div class="form-group">
		<input class="form-control" name="firstname" value="{{ $user->firstname }}">
	</div>
	<div class="form-group">
		<input class="form-control" name="lastname" value="{{ $user->lastname }}">
	</div>

	<div class="form-group">
		<input class="form-control" name="email" value="{{ $user->lastname }}">
	</div>

	{{ Form::submit('Update Account', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}