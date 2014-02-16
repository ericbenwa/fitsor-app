@extends('layouts.global')

@section('content')
<h1>hello worlds</h1>

<form action="{{ action('ExerciseTypesController@postCreate') }}" method="POST">
	<input value="" name="exercisetype" />
</form>
@endsection